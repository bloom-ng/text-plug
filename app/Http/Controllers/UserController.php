<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use League\Csv\Reader;
use League\Csv\Statement;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%");
            });
        }

        if ($request->has('sort')) {
            $sort = $request->input('sort');
            if ($sort === 'oldest') {
                $query->oldest();
            } elseif ($sort === 'newest') {
                $query->latest();
            }
        } else {
            $query->latest();
        }

        $users = $query->paginate(10);

        return view('admin.users.index', compact('users'))
            ->with('search', $request->input('search'))
            ->with('sort', $request->input('sort'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        if ($request->has('name')) {
            $user->update(['name' => $request->input('name')]);
        }

        if ($request->has('email')) {
            $user->update(['email' => $request->input('email')]);
        }

        return redirect('/admin/users')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin/users')->with('success', 'User deleted successfully');
    }

    public function suspend(User $user)
    {
        $user->update(['is_suspended' => true]);
        return redirect()->route('admin.users.index')->with('success', 'User suspended successfully');
    }

    public function unsuspend(User $user)
    {
        $user->update(['is_suspended' => false]);
        return redirect()->route('admin.users.index')->with('success', 'User unsuspended successfully');
    }

    public function import(Request $request)
    {
        // $request->validate([
        //     'file' => 'required|mimes:csv,txt',
        // ]);

        $location = fopen('css/user_data.csv', 'r');

        // Initialize the CSV reader
        $csv = Reader::createFromStream($location);
        $csv->setHeaderOffset(0); // Set the header offset
        $csv->setDelimiter(',');

        // Create a statement to read the CSV file
        $statement = Statement::create()
            ->offset(25030); // Skip the header row
        // ->limit(10); // Limit the number of rows to read
        // ->delimiter(',');

        // Set timeout to 5 minutes (300 seconds)
        ini_set('max_execution_time', 9000);

        // Loop through each row
        $records = $statement->process($csv);
        $createdUsers = 0;
        $skippedUsers = 0;

        foreach ($records as $record) {
            // Extract the data
            $email = $record['email'];
            // $balance = $record['balance'];

            // Check if user already exists
            if (User::whereEmail($email)->exists()) {
                Log::info("User $email already exists. Skipping...");
                $skippedUsers++;
                continue;
            }

            // Create the user
            $user = User::create([
                'email' => $email,
                'password' => bcrypt($email . Str::random(5)),
                'name' => Str::before($record['email'], '@'),
            ]);

            Log::info("User created: " . json_encode($user));
            $createdUsers++;
        }

        Log::info("Imported: " . $createdUsers . " users. Skipped " . $skippedUsers . " existing users.");

        // Return success response
        return back()->with('success', "Imported " . $createdUsers . " users. Skipped " . $skippedUsers . " existing users.");
    }

    public function verify(Request $request)
    {
        $location = fopen('css/user_data.csv', 'r');

        // Initialize the CSV reader
        $csv = Reader::createFromStream($location);
        $csv->setHeaderOffset(0);
        $csv->setDelimiter(',');

        // Create a statement to read the CSV file
        $statement = Statement::create()
            ->offset(0);

        // Set timeout to 5 minutes (300 seconds)
        ini_set('max_execution_time', 6000);

        // Loop through each row
        $records = $statement->process($csv);
        $existingUsers = 0;
        $nonExistingUsers = 0;

        foreach ($records as $record) {
            // Extract the email
            $email = $record['email'];

            // Check if user exists
            if (User::whereEmail($email)->exists()) {
                Log::info("User $email exists.");
                // dump("User $email exists.");
                $existingUsers++;
            } else {
                Log::info("User $email does not exist.");
                // dump("User $email exists.");
                $nonExistingUsers++;
            }
        }
        dump(User::all()->count());
        Log::info(User::all()->count());
        Log::info("$existingUsers users exist. $nonExistingUsers users do not exist.");
        dump("$existingUsers users exist. $nonExistingUsers users do not exist.");

        // Return success response
        return back()->with('success', "$existingUsers users exist. $nonExistingUsers users do not exist.");
    }

    public function processWalletCredits(Request $request)
    {
        $location = fopen('css/balance_data.csv', 'r');

        // Initialize the CSV reader
        $csv = Reader::createFromStream($location);
        $csv->setHeaderOffset(0);
        $csv->setDelimiter(',');

        // Create a statement to read the CSV file
        $statement = Statement::create()
            // ->limit(20)
            ->offset(0);

        // Set timeout to 5 minutes (300 seconds)
        ini_set('max_execution_time', 6000);

        // Loop through each row
        $records = $statement->process($csv);
        $processedCredits = 0;
        $failedCredits = 0;
        $skippedCredits = 0;

        foreach ($records as $record) {
            // Extract the email and balance
            $email = $record['email'];
            $balance = $record['balance'];

            // Skip if balance is 0
            if ($balance == 0) {
                Log::info("Skipping user $email with balance 0.");
                $skippedCredits++;
                continue;
            }

            // Find the user ID by email
            $user = User::whereEmail($email)->first();
            if (!$user) {
                Log::alert("User $email not found.");
                $failedCredits++;
                continue;
            }

            // Perform wallet credit
            try {
                Wallet::create([
                    'user_id' => $user->id,
                    'amount' => $balance,
                    'type' => Wallet::CREDIT,
                ]);
                Log::info("Wallet credit successful for user $email.");
                $processedCredits++;
            } catch (\Exception $e) {
                Log::error("Wallet credit failed for user $email: " . $e->getMessage());
                $failedCredits++;
            }
        }

        // Return success response
        return back()->with('success', "$processedCredits wallet credits processed. $failedCredits credits failed. $skippedCredits credits skipped.");
    }
}
