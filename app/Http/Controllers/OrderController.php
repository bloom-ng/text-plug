<?php

namespace App\Http\Controllers;

use App\Models\Config;
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

    public function index(Request $request)
    {
        $smsPoolServices = $this->smsPoolService->getServices();
        $daisyServices = $this->daisyService->listServicesWithPrices();
        $smsPoolCountries = $this->smsPoolService->getCountries();

        $balance = User::where('id', Auth::user()->id)->first()->walletBalance();
        $min_balance = Config::where('key', 'min_balance')->value('value') ??  Config::MINIMUMBALANCEUSD;
        $rate = Config::where('key', 'rate')->value('value') ??  Config::RATE;
        $can_purchase = $balance >= $rate * $min_balance;

        $query = Order::where('user_id', Auth::user()->id);

        // Fetch all orders for the user
        $orders = $query->get();

        // Prepare service name mappings
        $decodedSmsPoolServices = json_decode($smsPoolServices, true);
        $decodedDaisyServices = json_decode($daisyServices['response'], true);

        // Map service IDs to service names and filter if search is present
        $filteredOrders = $orders->filter(function ($order) use ($request, $decodedSmsPoolServices, $decodedDaisyServices) {
            if ($order->server === 'server_1') {
                $serviceName = collect($decodedSmsPoolServices)->firstWhere('ID', $order->service)['name'] ?? $order->service;
            } else {
                $serviceName = $order->service;
                foreach ($decodedDaisyServices as $key => $serviceDatas) {
                    foreach ($serviceDatas as $serviceKey => $serviceData) {
                        if ($key == $order->service) {
                            $serviceName = $serviceData['name'];
                            break 2;
                        }
                    }
                }
            }
            $order->service_name = $serviceName;

            if ($request->has('search')) {
                $search = strtolower($request->input('search'));
                return stripos($order->order_id, $search) !== false
                    || stripos($order->service, $search) !== false
                    || stripos($order->phone_number, $search) !== false
                    || stripos($serviceName, $search) !== false;
            }
            return true;
        });

        // Sort the filtered orders
        if ($request->has('sort')) {
            $filteredOrders = $request->input('sort') == 'oldest'
                ? $filteredOrders->sortBy('created_at')
                : $filteredOrders->sortByDesc('created_at');
        } else {
            $filteredOrders = $filteredOrders->sortByDesc('created_at');
        }

        // Paginate the results manually
        $page = $request->input('page', 1);
        $perPage = 10;
        $paginatedOrders = new \Illuminate\Pagination\LengthAwarePaginator(
            $filteredOrders->forPage($page, $perPage),
            $filteredOrders->count(),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('order')->with([
            'daisyServices' => $decodedDaisyServices,
            'smsPoolServices' => $decodedSmsPoolServices,
            'smsPoolCountries' => json_decode($smsPoolCountries, true),
            'can_purchase' => $can_purchase,
            'orders' => $paginatedOrders
        ]);
    }

    public function adminIndex(Request $request)
    {
        $smsPoolServices = $this->smsPoolService->getServices();
        $daisyServices = $this->daisyService->listServicesWithPrices();
        $smsPoolCountries = $this->smsPoolService->getCountries();

        $balance = User::where('id', Auth::user()->id)->first()->walletBalance();
        $rate = Config::where('key', 'rate')->value('value') ??  Config::RATE;
        $can_purchase = $balance >= $rate;

        $query = Order::where('user_id', Auth::user()->id);

        // Fetch all orders for the user
        $orders = $query->get();

        // Prepare service name mappings
        $decodedSmsPoolServices = json_decode($smsPoolServices, true);
        $decodedDaisyServices = json_decode($daisyServices['response'], true);

        // Map service IDs to service names and filter if search is present
        $filteredOrders = $orders->filter(function ($order) use ($request, $decodedSmsPoolServices, $decodedDaisyServices) {
            if ($order->server === 'server_1') {
                $serviceName = collect($decodedSmsPoolServices)->firstWhere('ID', $order->service)['name'] ?? $order->service;
            } else {
                $serviceName = $order->service;
                foreach ($decodedDaisyServices as $key => $serviceDatas) {
                    foreach ($serviceDatas as $serviceKey => $serviceData) {
                        if ($key == $order->service) {
                            $serviceName = $serviceData['name'];
                            break 2;
                        }
                    }
                }
            }
            $order->service_name = $serviceName;

            if ($request->has('search')) {
                $search = strtolower($request->input('search'));
                return stripos($order->order_id, $search) !== false
                    || stripos($order->service, $search) !== false
                    || stripos($order->phone_number, $search) !== false
                    || stripos($serviceName, $search) !== false;
            }
            return true;
        });

        // Sort the filtered orders
        if ($request->has('sort')) {
            $filteredOrders = $request->input('sort') == 'oldest'
                ? $filteredOrders->sortBy('created_at')
                : $filteredOrders->sortByDesc('created_at');
        } else {
            $filteredOrders = $filteredOrders->sortByDesc('created_at');
        }

        // Paginate the results manually
        $page = $request->input('page', 1);
        $perPage = 10;
        $paginatedOrders = new \Illuminate\Pagination\LengthAwarePaginator(
            $filteredOrders->forPage($page, $perPage),
            $filteredOrders->count(),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('admin.orders.index')->with([
            'daisyServices' => $decodedDaisyServices,
            'smsPoolServices' => $decodedSmsPoolServices,
            'smsPoolCountries' => json_decode($smsPoolCountries, true),
            'can_purchase' => $can_purchase,
            'orders' => $paginatedOrders
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

        $rate = Config::where('key', 'rate')->value('value') ??  Config::RATE;

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

        //TODO: deduct user balance
        Wallet::create(['user_id' => Auth::user()->id, 'amount' => $cost * $rate, 'type' => Wallet::DEBIT]);

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

        $rate = Config::where('key', 'rate')->value('value') ??  Config::RATE;

        $balance = User::where('id', Auth::user()->id)->first()->walletBalance();

        if ($balance < $order->price * $rate) {
            return response()->json([
                'status' => 'error',
                'message' => 'Insufficient Balance to view number. Please fund your account and try again.'
            ], 500);
        }

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

                //TODO: refund user balance
                Wallet::create(['user_id' => Auth::user()->id, 'amount' => $order->price * $rate, 'type' => Wallet::REFUND]);

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

            if ($response['status'] == 'success') {
                $order->status = Order::ORDER_DONE;
                $order->save();

                $sms = new SmsCode();
                $sms->user_id = Auth::user()->id;
                $sms->order_id = $order->id;
                $sms->code = $response['code'];
                $sms->message = $response['code'];
                $sms->save();

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

                //TODO: refund user balance
                Wallet::create(['user_id' => Auth::user()->id, 'amount' => $order->price * $rate, 'type' => Wallet::REFUND]);

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

        $rate = Config::where('key', 'rate')->value('value') ??  Config::RATE;

        $response = $this->smsPoolService->checkPrice($validated['service'], $validated['country']);

        return response()->json([
            'price' => $response['high_price'] * $rate ?? $response['price'] * $rate,
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
