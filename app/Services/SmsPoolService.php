<?php

namespace App\Services;

use  Illuminate\Support\Facades\Http;

class SmsPoolService
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('SMS_POOL_API_KEY');
        $this->baseUrl = 'https://api.smspool.net';
    }

    public function getServices()
    {
        $response = Http::withToken($this->apiKey)->get('https://api.smspool.net/service/retrieve_all');

        return $response->body();
    }

    public function getCountries()
    {
        $response = Http::withToken($this->apiKey)->get('https://api.smspool.net/country/retrieve_all');

        return $response->body();
    }

    public function orderSMS($service, $country)
    {
        // dd($service, $country);
        $params = [
            'key' => $this->apiKey,
            'country' => $country,
            'service' => intval($service),
        ];

        $response = Http::asForm()->post('https://api.smspool.net/purchase/sms', $params);

        // dd($response);

        if ($response->successful()) {
            return $response;
        } else {
            // Handle the error
            return 'Error: ' . $response->status();
        }
    }

    public function checkSMS($orderId)
    {
        $response = Http::withToken($this->apiKey)->get('https://api.smspool.net/sms/check', [
            'orderid' => $orderId,
            'key' => $this->apiKey,
        ]);

        return $response->json();
    }
}
