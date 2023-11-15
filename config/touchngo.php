<?php

return [
    'url' => env('TNG_URL', 'https://api-sd.tngdigital.com.my'),
    'client_id' => env('TNG_CLIENT_ID', '2021121717300900014912'),
    'client_secret' => env('TNG_CLIENT_SECRET', '2021121717300900014912GM328S'),
    'merchant_id' => env('TNG_MERCHANT_ID', '217120000001125993322'),
    'product_code' => env('TNG_PRODUCT_CODE', '51051000101000100001'),
    'private_key' => env('TNG_PRIVATE_KEY', 'sample-private-key.pem'),
    'prefix' => 'touch-n-go',
    'middleware' => ['web'],
];