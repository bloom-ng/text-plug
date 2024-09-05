<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\SmsCode;
use App\Models\User;
use App\Models\Wallet;
use App\Services\DaisyService;
use App\Services\SmsPoolService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    private $daisyService;
    private $smsPoolService;

    public function __construct(DaisyService $daisyService)
    {
        $this->daisyService = $daisyService;
        $this->smsPoolService = new SmsPoolService();
    }

    public function index()
    {
        $smsPoolServices = $this->smsPoolService->getServices();
        $daisyServices = $this->daisyService->listServicesWithPrices();
        $smsPoolCountries = $this->smsPoolService->getCountries();

        $balance = User::where('id', Auth::user()->id)->first()->walletBalance();
        $rate = 1650;

        $orders = Order::where('user_id', Auth::user()->id)->latest()->paginate(10);

        $can_purchase = false;

        if ($balance < $rate * 1) {
            $can_purchase = false;
        } else {
            $can_purchase = true;
        }

        return view('order')->with([
            'daisyServices' => json_decode($daisyServices['response'], true),
            'smsPoolServices' => json_decode($smsPoolServices, true),
            'smsPoolCountries' => json_decode($smsPoolCountries, true),
            'can_purchase' => $can_purchase,
            'orders' => $orders
        ]);
    }

    public function adminIndex(Request $request)
    {
        $query = Order::query(); // Start with all orders

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('order_id', 'like', "%{$search}%")
                    ->orWhere('service', 'like', "%{$search}%")
                    ->orWhere('phone_number', 'like', "%{$search}%")
                    ->orWhere('country', 'like', "%{$search}%");
            });
        }

        $orders = $query->latest()->paginate(10);

        return view('admin.orders.index')->with([
            'orders' => $orders,
            'search' => $request->input('search')
        ]);
    }

    public function order(Request $request)
    {
        //validate
        $validated = $request->validate([
            'server' => 'required|string',
            'service' => 'required|string',
            'country' => 'nullable|string',
        ]);

        if ($validated['server'] == 'server_1') {
            //SMS POOL IMPLEMENTATION
            $response = $this->smsPoolService->orderSMS($validated['service'], $validated['country']);

            if (str_contains($response, 'Error: ')) {
                return redirect('/user/orders')->with('error', 'Failed to order number please try again.');
            }

            $responseBody = $response->json();
            if ($responseBody['success'] !== 1) {
                return redirect('/user/orders')->with('error', 'Failed to order number please try again later');
            }
            $cost = $responseBody['cost'] ?? 1.0;
            $number = $response['phone_number'] ?? $response['number'];
            $orderId = $response['order_id'];
        } else {
            //DAISY IMPLEMENTATION
            $response = $this->daisyService->rentNumber($validated['service'], null, null);

            // if (str_contains($response, 'Error: ')) {
            //     return redirect('/user/orders')->with('error', 'Failed to order number please try again.');
            // }

            if ($response['status'] !== 'success') {
                return redirect('/user/orders')->with('error', 'Failed to order number please try again later');
            }

            $cost = $response['cost'] ?? 1.0;
            $number = $response['number'];
            $orderId = $response['id'];
        }

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->server = $validated['server'];
        $order->order_id = $orderId;
        $order->country = $validated['country'] ?? null;
        $order->service = $validated['service'];
        $order->phone_number = $number;
        $order->status = Order::ORDER_PENDING;
        $order->price = $cost;
        $order->response = json_encode($response);

        $order->save();

        return redirect('/user/orders')->with('success', 'Order placed successfully');
    }

    public function getCode(Request $request, $id)
    {
        $order = Order::where('id', $id)->first();

        $smsExist = SmsCode::where('order_id', $order->id)->first();

        //If sms exist then return
        if ($smsExist) {
            return response()->json([
                'status' => 'success',
                'message' => 'Order Fulfiled successfully',
                'number' => $order['phone_number'],
                'service' => $order['service'],
                'status' => $order['status'],
                'message' => $smsExist['message'] ?? '',
                'created_at' => date("d-m-Y", strtotime($order['created_at']))

            ], 200);
        }

        if ($order->server == 'server_1') {
            //check if sms exist in sms pool
            $response = $this->smsPoolService->checkSMS($order->order_id);
            // dd($response);
            if ($response['status'] == 3) {
                //if sms exist then return
                $order->status = Order::ORDER_DONE;
                $order->save();

                $sms = new SmsCode();
                $sms->user_id = Auth::user()->id;
                $sms->order_id = $order->id;
                $sms->code = $response['sms'];
                $sms->message = $response['full_sms'];
                $sms->save();

                //TODO: deduct user balance
                Wallet::create(['user_id' => Auth::user()->id, 'amount' => $order->price * 1700, 'type' => Wallet::DEBIT]);

                return response()->json([
                    'status' => 'success',
                    'message' => 'Order Fulfiled successfully',
                    'number' => $order['phone_number'],
                    'service' => $order['service'],
                    'status' => $order['status'],
                    'message' => $smsExist['message'] ?? '',
                    'created_at' => date("d-m-Y", strtotime($order['created_at']))
                ], 200);
            } else if ($response['status'] == 6) {
                $order->status = Order::ORDER_REFUNDED;
                $order->save();

                return response()->json([
                    'status' => 'success',
                    'message' => 'Order Refunded successfully',
                    'number' => $order['phone_number'],
                    'service' => $order['service'],
                    'status' => $order['status'],
                    'message' => '',
                    'created_at' => date("d-m-Y", strtotime($order['created_at']))
                ], 200);
            } else {
                $order->status = Order::ORDER_PENDING;
                $order->save();

                return response()->json([
                    'status' => 'success',
                    'message' => 'Order Pending successfully',
                    'number' => $order['phone_number'],
                    'service' => $order['service'],
                    'status' => $order['status'],
                    'message' => '',
                    'created_at' => date("d-m-Y", strtotime($order['created_at']))
                ], 200);
            }
        } else {
            $response = $this->daisyService->getCode($order->order_id);

            if (str_contains($response['message'], 'STATUS_OK:')) {
                $order->status = Order::ORDER_DONE;
                $order->save();

                $sms = new SmsCode();
                $sms->user_id = Auth::user()->id;
                $sms->order_id = $order->id;
                $sms->code = $response['message'];
                $sms->message = $response['message'];
                $sms->save();

                //TODO: deduct user balance
                Wallet::create(['user_id' => Auth::user()->id, 'amount' => $order->price * 1700, 'type' => Wallet::DEBIT]);

                return response()->json([
                    'status' => 'success',
                    'message' => 'Order Fulfiled successfully',
                    'number' => $order['phone_number'],
                    'service' => $order['service'],
                    'status' => $order['status'],
                    'message' => $smsExist['message'] ?? '',
                    'created_at' => date("d-m-Y", strtotime($order['created_at']))
                ], 200);
            } else if ($response['message'] == "Waiting for SMS" || $response['message'] == "Wrong ID") {
                $order->status = Order::ORDER_PENDING;
                $order->save();

                return response()->json([
                    'status' => 'success',
                    'message' => 'Order Fulfiled successfully',
                    'number' => $order['phone_number'],
                    'service' => $order['service'],
                    'status' => $order['status'],
                    'message' => '',
                    'created_at' => date("d-m-Y", strtotime($order['created_at']))
                ], 200);
            } else {
                $order->status = Order::ORDER_REFUNDED;
                $order->save();

                return response()->json([
                    'status' => 'success',
                    'message' => 'Order Fulfiled successfully',
                    'number' => $order['phone_number'],
                    'service' => $order['service'],
                    'status' => $order['status'],
                    'message' => '',
                    'created_at' => date("d-m-Y", strtotime($order['created_at']))
                ], 200);
            }
        }
    }

    public function checkPrice(Request $request)
    {
        $validated = $request->validate([
            'service' => 'required|string',
            'country' => 'required|string',
        ]);

        $response = $this->smsPoolService->checkPrice($validated['service'], $validated['country']);

        return response()->json([
            'price' => $response['high_price'] * 1700,
        ], 200);
    }

    public function checkAvailableNumber(Request $request)
    {
        $validated = $request->validate([
            'service' => 'required|string',
            'country' => 'required|string',
        ]);

        $response = $this->smsPoolService->checkAvailableNumber($validated['service'], $validated['country']);

        return response()->json([
            'availableNumbers' => $response['amount'],
        ], 200);
    }
}
