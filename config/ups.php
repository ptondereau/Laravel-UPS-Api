<?php

return [
    /*
    |--------------------------------------------------------------------------
    | UPS Credentials
    |--------------------------------------------------------------------------
    |
    | This option specifies the UPS credentials for your account.
    | You can put it here but I strongly recommend to put those settings into your
    | .env & .env.example file.
    |
    */
    'access_key' => env('UPS_ACCESS_KEY', 'test'),
    'user_id'    => env('UPS_USER_ID', 'test'),
    'password'   => env('UPS_PASSWORD', 'test'),
    'sandbox'    => env('UPS_SANDBOX', true), // Set it to false when your ready to use your app in production.
];
