<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/user/dashboard')->with('success', 'Login Successful');
        } else {
            return redirect("/login")->with('error', 'Invalid credentials. Please try again.');
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('/register')->withErrors($validator)->withInput()->with('error', "An error occured try again");
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login the user after creation
        Auth::login($user);

        // Redirect to a success page or the login page
        return redirect('/user/dashboard')->with('success', 'Account registered successfully.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function updateProfile(Request $request)
    {
        // Validate and update the user's profile information
        $user = auth()->user();

        if ($request->has('name')) {
            $user->update(['name' => $request->input('name')]);
        }

        if ($request->has('email')) {
            $user->update(['email' => $request->input('email')]);
        }

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        // Validate and update the user's password
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', "An error occured try again");
        }

        // Check if the current password is correct
        if (!Hash::check($request->input('password'), auth()->user()->password)) {
            return redirect()->back()->with('error', 'Password Does not match our record');
        }

        // Update the password
        auth()->user()->update(['password' => bcrypt($request->input('new_password'))]);

        return redirect()->back()->with('success', 'Password updated successfully!');
    }

    public function forgotPassword(Request $request)
    {
        // Validate the email address
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function resetPasswordView(Request $request, string $token)
    {
        return view('reset-password', ['token' => $token, 'email' => $request->query('email')]);
    }

    public function resetPassword(Request $request)
    {
        // dd($request->all());
        // Validate the password reset token
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
