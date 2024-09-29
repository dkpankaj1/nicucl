<?php

return [

    'environment' => env('PAYTM_ENVIRONMENT', 'PROD'),
    'upi_id' => env('PAYTM_UPI_ID', 'paytmqr281005050101mnp7fhqey7n0@paytm'),
    'tnx_url' => env('PAYTM_TNX_URL', 'https://pg.allnice.in/order/paytm'),
    'token' => env('PAYTM_TOKEN', 'a8f156-c687de-f6a2eb-09dac9-984cf2'),
    'secret' => env('PAYTM_SECRET', 'lpVnf2pnVJ'),
    'callback_url' => env('PAYTM_CALLBACK_URL', 'http://nicucl.test/payment/response'),
    'notes' => 'ucldivo'
];
