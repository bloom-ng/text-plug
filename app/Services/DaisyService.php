<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class DaisyService
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = env('DAISY_API_KEY');
        $this->baseUrl = 'https://daisysms.com/stubs/handler_api.php';
    }

    public function getBalance()
    {
        $response = Http::get($this->baseUrl, [
            'api_key' => $this->apiKey,
            'action' => 'getBalance'
        ]);

        return $this->parseResponse($response->body());
    }

    public function rentNumber($service, $maxPrice = null, $areas = null)
    {
        $params = [
            'api_key' => $this->apiKey,
            'action' => 'getNumber',
            'service' => $service,
        ];

        if ($maxPrice) {
            $params['max_price'] = $maxPrice;
        }

        if ($areas) {
            $params['areas'] = implode(',', $areas);
        }

        $response = Http::get($this->baseUrl, $params);

        if ($response->successful()) {
            $res = $this->parseResponse($response->body());
            $res['cost'] = $response->headers()['X-Price'][0];

            return $res;

            // return $response;
        } else {
            // Handle the error
            return 'Error: ' . $response->status();
        }

        // return $this->parseResponse($response->body());
    }

    public function getCode($id)
    {
        $response = Http::get($this->baseUrl, [
            'api_key' => $this->apiKey,
            'action' => 'getStatus',
            'id' => $id
        ]);

        return $this->parseResponse($response->body());
    }

    public function markRentalAsDone($id)
    {
        $response = Http::get($this->baseUrl, [
            'api_key' => $this->apiKey,
            'action' => 'setStatus',
            'id' => $id,
            'status' => 6
        ]);

        return $this->parseResponse($response->body());
    }

    public function cancelRental($id)
    {
        $response = Http::get($this->baseUrl, [
            'api_key' => $this->apiKey,
            'action' => 'setStatus',
            'id' => $id,
            'status' => 8
        ]);

        return $this->parseResponse($response->body());
    }

    public function listServicesWithPrices()
    {
        $response = Http::get($this->baseUrl, [
            'api_key' => $this->apiKey,
            'action' => 'getPricesVerification'
        ]);

        return $this->parseResponse($response->body());
    }

    protected function parseResponse($response)
    {
        if (str_contains($response, 'ACCESS_BALANCE:')) {
            return ['status' => 'success', 'balance' => floatval(str_replace('ACCESS_BALANCE:', '', $response))];
        } elseif (str_contains($response, 'ACCESS_NUMBER:')) {
            list(, $id, $number) = explode(':', $response);
            return ['status' => 'success', 'id' => $id, 'number' => $number];
        } elseif (str_contains($response, 'STATUS_OK:')) {
            return ['status' => 'success', 'code' => str_replace('STATUS_OK:', '', $response)];
        } elseif ($response === 'BAD_KEY') {
            return ['status' => 'error', 'message' => 'Invalid API key'];
        } elseif ($response === 'NO_NUMBERS') {
            return ['status' => 'error', 'message' => 'No numbers available'];
        } elseif ($response === 'MAX_PRICE_EXCEEDED') {
            return ['status' => 'error', 'message' => 'Max price exceeded'];
        } elseif ($response === 'NO_MONEY') {
            return ['status' => 'error', 'message' => 'Insufficient balance'];
        } elseif ($response === 'TOO_MANY_ACTIVE_RENTALS') {
            return ['status' => 'error', 'message' => 'Too many active rentals'];
        } elseif ($response === 'ACCESS_ACTIVATION') {
            return ['status' => 'success', 'message' => 'Rental marked as done'];
        } elseif ($response === 'STATUS_CANCEL') {
            return ['status' => 'success', 'message' => 'Rental cancelled'];
        } elseif ($response === 'STATUS_WAIT_CODE') {
            return ['status' => 'success', 'message' => 'Waiting for SMS'];
        } elseif ($response === 'NO_ACTIVATION') {
            return ['status' => 'success', 'message' => 'Wrong ID'];
        } else {
            return ['status' => 'error', 'message' => 'Unknown error', 'response' => $response];
        }
    }
}
