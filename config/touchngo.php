<?php

return [
    'url' => env('TNG_URL', 'https://api-sd.tngdigital.com.my'),
    'CLIENT_ID' => env('TNG_CLIENT_ID', '2021121717300900014912'),
    'CLIENT_SECRET' => env('TNG_CLIENT_SECRET', '2021121717300900014912GM328S'),
    'MERCHANT_ID' => env('TNG_MERCHANT_ID', '217120000001125993322'),
    'PRODUCT_CODE' => env('TNG_PRODUCT_CODE', '51051000101000100001'),
    'PRIVATE_KEY' => env('TNG_PRIVATE_KEY', 'sample-private-key.pem'),
    'prefix' => 'touch-n-go',
    'middleware' => ['web'],
];