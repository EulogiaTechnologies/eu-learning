<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentGatewaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_gateways')->insert([
            [
                'id' => 1,
                'identifier' => 'paypal',
                'currency' => 'USD',
                'title' => 'Paypal',
                'model_name' => 'Paypal',
                'description' => '',
                'keys' => json_encode([
                    'sandbox_client_id' => 'AfGaziKslex-scLAyYdDYXNFaz2aL5qGau-SbDgE_D2E80D3AFauLagP8e0kCq9au7W4IasmFbirUUYc',
                    'sandbox_secret_key' => 'EMa5pCTuOpmHkhHaCGibGhVUcKg0yt5-C3CzJw-OWJCzaXXzTlyD17SICob_BkfM_0Nlk7TWnN42cbGz',
                    'production_client_id' => '1234',
                    'production_secret_key' => '12345'
                ]),
                'status' => 1,
                'test_mode' => 1,
                'is_addon' => 0,
                'created_at' => '2023-06-24 03:51:49',
                'updated_at' => '2023-11-28 01:44:37',
            ],
            [
                'id' => 2,
                'identifier' => 'stripe',
                'currency' => 'USD',
                'title' => 'Stripe',
                'model_name' => 'StripePay',
                'description' => '',
                'keys' => json_encode([
                    'public_key' => 'pk_test_c6VvBEbwHFdulFZ62q1IQrar',
                    'secret_key' => 'sk_test_9IMkiM6Ykxr1LCe2dJ3PgaxS',
                    'public_live_key' => 'pk_live_xxxxxxxxxxxxxxxxxxxxxxxx',
                    'secret_live_key' => 'sk_live_xxxxxxxxxxxxxxxxxxxxxxxx'
                ]),
                'status' => 1,
                'test_mode' => 1,
                'is_addon' => 0,
                'created_at' => '2023-06-24 03:51:49',
                'updated_at' => '2023-10-30 01:33:32',
            ],
            [
                'id' => 3,
                'identifier' => 'razorpay',
                'currency' => 'INR',
                'title' => 'Razorpay',
                'model_name' => 'Razorpay',
                'description' => '',
                'keys' => json_encode([
                    'public_key' => 'rzp_test_J60bqBOi1z1aF5',
                    'secret_key' => 'uk935K7p4j96UCJgHK8kAU4q'
                ]),
                'status' => 1,
                'test_mode' => 1,
                'is_addon' => 0,
                'created_at' => '2023-06-24 03:51:49',
                'updated_at' => '2024-09-10 22:41:31',
            ],
            [
                'id' => 4,
                'identifier' => 'flutterwave',
                'currency' => 'USD',
                'title' => 'Flutterwave',
                'model_name' => 'Flutterwave',
                'description' => '',
                'keys' => json_encode([
                    'public_key' => 'FLWPUBK_TEST-48dfbeb50344ecd8bc075b4ffe9ba266-X',
                    'secret_key' => 'FLWSECK_TEST-1691582e23bd6ee4fb04213ec0b862dd-X'
                ]),
                'status' => 1,
                'test_mode' => 1,
                'is_addon' => 0,
                'created_at' => '2023-06-24 03:51:49',
                'updated_at' => '2023-10-30 01:39:58',
            ],
            [
                'id' => 5,
                'identifier' => 'paytm',
                'currency' => 'USD',
                'title' => 'Paytm',
                'model_name' => 'Paytm',
                'description' => '',
                'keys' => json_encode([
                    'public_key' => 'ApLWOX88722132489587',
                    'secret_key' => '#iFa7&W_C50VL@aT'
                ]),
                'status' => 1,
                'test_mode' => 1,
                'is_addon' => 0,
                'created_at' => '2023-06-24 03:51:49',
                'updated_at' => '2023-10-30 01:42:32',
            ],
            [
                'id' => 6,
                'identifier' => 'offline',
                'currency' => 'USD',
                'title' => 'Offline Payment',
                'model_name' => 'Paytm',
                'description' => '',
                'keys' => json_encode([
                    'public_key' => 'ApLWOX88722132489587',
                    'secret_key' => '#iFa7&W_C50VL@aT'
                ]),
                'status' => 1,
                'test_mode' => null,
                'is_addon' => 0,
                'created_at' => '2023-06-24 03:51:49',
                'updated_at' => '2023-10-30 01:42:32',
            ]
        ]);
    }
}
