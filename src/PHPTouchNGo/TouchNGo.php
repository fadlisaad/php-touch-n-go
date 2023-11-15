<?php
use Illuminate\Support\Facades\Storage;

class TouchNGo
{
    public function createOrder($request)
    {
        header("Content-Type: application/json; charset=UTF-8");
        $guid = $request['transaction_id']; // merchant transaction ID
        $date = new DateTime("now", new DateTimeZone('Asia/Kuala_Lumpur') );

        $payload = [
            'head' => [
                'version' => '1.0',
                'function' => 'alipayplus.acquiring.order.create',
                'clientId' => config('touchngo.client_id'),
                'clientSecret' => config('touchngo.client_secret'),
                'reqTime' => $date->format('c'), // The ISO-8601 date (e.g. 2013-05-05T16:34:42+00:00)
                'reqMsgId' => $guid
            ],
            'body' => [
                'order' => [
                    'orderTitle' => $request['order_title'],
                    'orderAmount' => [
                        'currency' => 'MYR',
                        'value' => $request['amount']
                    ],
                    'merchantTransId' => $guid
                ],
                'merchantId' => config('touchngo.merchant_id'),
                'productCode' => config('touchngo.product_code'),
                'signAgreementPay' => 'false',
                'envInfo' => [
                    'terminalType' => 'SYSTEM',
                    'orderTerminalType' => 'WEB'
                ],
                'notificationUrls' => [
                    'url' => $request['return_url'],
                    'type' => 'PAY_RETURN'
                ],
            ]
        ];

        $signedPayload = TouchNGo::signature($payload);
        
        $data = [
            'request' => $payload,
            'signature' => $signedPayload
        ];

        return json_encode($data);
    }

    public function queryOrder($request)
    {
        header("Content-Type: application/json; charset=UTF-8");
        $guid = $request['transaction_id']; // merchant transaction ID
        $date = new DateTime("now", new DateTimeZone('Asia/Kuala_Lumpur') );

        $payload = [
            'head' => [
                'version' => '1.0',
                'function' => 'alipayplus.acquiring.order.query',
                'clientId' => config('touchngo.client_id'),
                'clientSecret' => config('touchngo.client_secret'),
                'reqTime' => $date->format('c'), // The ISO-8601 date (e.g. 2013-05-05T16:34:42+00:00)
                'reqMsgId' => $guid
            ],
            'body' => [
                'merchantId' => config('touchngo.merchant_id'),
                'acquirementId' => $request['acquirement_id']
            ]
        ];

        $signedPayload = TouchNGo::signature($payload);
        
        $data = [
            'request' => $payload,
            'signature' => $signedPayload
        ];

        return json_encode($data);
    }

    public function signature($payload)
    {
        $private_key = Storage::get(config('touchngo.private_key'));
        $data = json_encode($payload);

        // fetch private key from file and ready it
        $pkeyid = openssl_pkey_get_private(file_get_contents($private_key));

        // compute signature
        openssl_sign($data, $signature, $pkeyid, OPENSSL_ALGO_SHA256);
        openssl_free_key($pkeyid);

        // store signature throughout the session
        $_SESSION["signature"] = base64_encode($signature);

        // return the signature
        return base64_encode($signature);
    }
}