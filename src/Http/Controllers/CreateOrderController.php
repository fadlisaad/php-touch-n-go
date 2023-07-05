<?php

namespace FadliSaad\PHPTouchNGo\Http\Controllers;
use Illuminate\Support\Facades\Http;
use TouchNGo;

class CreateOrderController extends Controller
{
    public function store()
    {
        request()->validate([
            'order_title' => 'required',
            'amount' => 'required',
            'return_url' => 'required',
            'transaction_id' => 'required'
        ]);

        $data = [
            'order_title' => request('order_title'),
            'amount' => request('amount'),
            'return_url' => request('return_url'),
            'transaction_id' => request('transaction_id')
          ];

        $payload = TouchNGo::createOrder($data);

        $response = Http::acceptJson()->asForm()->post(env('API_URL').'/order/create.htm', [
            $data
        ]);

        return $response;
    }
}
