<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [1, 'language', 'english', '2023-10-29 05:36:40', '2024-09-14 05:07:23'],
            [2, 'system_name', 'Academy LMS', '2023-10-29 05:36:40', '2024-09-14 05:07:22'],
            [3, 'system_title', 'Academy Learning Club', '2023-10-29 05:36:40', '2024-09-14 05:07:22'],
            [4, 'system_email', 'academy@example.com', '2023-10-29 05:36:40', '2024-09-14 05:07:22'],
            [5, 'address', 'Sydney, Australia', '2023-10-29 05:36:40', '2024-09-14 05:07:22'],
            [6, 'phone', '+143-52-9933631', '2023-10-29 05:36:40', '2024-09-14 05:07:23'],
            [7, 'purchase_code', 'your-purchase-code', '2023-10-29 05:36:40', '2024-09-14 05:07:23'],
            [8, 'paypal', '[{\"active\":\"1\",\"mode\":\"sandbox\",\"sandbox_client_id\":\"AfGaziKslex-scLAyYdDYXNFaz2aL5qGau-SbDgE_D2E80D3AFauLagP8e0kCq9au7W4IasmFbirUUYc\",\"sandbox_secret_key\":\"EMa5pCTuOpmHkhHaCGibGhVUcKg0yt5-C3CzJw-OWJCzaXXzTlyD17SICob_BkfM_0Nlk7TWnN42cbGz\",\"production_client_id\":\"1234\",\"production_secret_key\":\"12345\"}]', '2023-10-29 05:36:40', '2023-10-29 05:36:40'],
            [9, 'stripe_keys', '[{\"active\":\"1\",\"testmode\":\"on\",\"public_key\":\"pk_test_CAC3cB1mhgkJqXtypYBTGb4f\",\"secret_key\":\"sk_test_iatnshcHhQVRXdygXw3L2Pp2\",\"public_live_key\":\"pk_live_xxxxxxxxxxxxxxxxxxxxxxxx\",\"secret_live_key\":\"sk_live_xxxxxxxxxxxxxxxxxxxxxxxx\"}]', '2023-10-29 05:36:40', '2023-10-29 05:36:40'],
            [10, 'youtube_api_key', 'youtube-and-google-drive-api-key', '2023-10-29 05:36:40', '2024-09-14 05:07:23'],
            [11, 'vimeo_api_key', 'vimeo-api-key', '2023-10-29 05:36:40', '2024-09-14 05:07:23'],
            [12, 'slogan', 'A course based video CMS', '2023-10-29 05:36:40', '2024-09-14 05:07:22'],
            [13, 'text_align', NULL, '2023-10-29 05:36:40', '2023-10-29 05:36:40'],
            [14, 'allow_instructor', '1', '2023-10-29 05:36:40', '2023-12-05 23:04:06'],
            [15, 'instructor_revenue', '70', '2023-10-29 05:36:40', '2023-12-05 23:04:11'],
            [16, 'system_currency', 'INR', '2023-10-29 05:36:40', '2024-09-10 22:45:52'],
            [17, 'paypal_currency', 'USD', '2023-10-29 05:36:40', '2023-10-29 05:36:40'],
            [18, 'stripe_currency', 'USD', '2023-10-29 05:36:40', '2023-10-29 05:36:40'],
            [19, 'author', 'Creativeitem', '2023-10-29 05:36:40', '2024-09-14 05:07:22'],
            [20, 'currency_position', 'right-space', '2023-10-29 05:36:40', '2024-09-10 22:45:52'],
            [21, 'website_description', 'Talemy is your ideal education the WordPress theme for sharing and selling your knowledge online. Teach what you love. Talemy gives you the tools.', '2023-10-29 05:36:40', '2024-09-14 05:07:22'],
            [22, 'website_keywords', 'LMS,Learning Management System,Creativeitem,Academy LMS', '2023-10-29 05:36:40', '2024-09-14 05:07:22'],
            [23, 'footer_text', 'Creativeitem', '2023-10-29 05:36:40', '2024-09-14 05:07:23'],
            [24, 'footer_link', 'https://creativeitem.com/', '2023-10-29 05:36:40', '2024-09-14 05:07:23'],
            [25, 'protocol', 'smtp', '2023-10-29 05:36:40', '2024-08-27 05:20:40'],
            [26, 'smtp_host', 'smtp.gmail.com', '2023-10-29 05:36:40', '2024-08-27 05:20:40'],
            [27, 'smtp_port', '587', '2023-10-29 05:36:40', '2024-08-27 05:20:40'],
            [28, 'smtp_user', 'example@gmail.com', '2023-10-29 05:36:40', '2024-08-27 05:20:40'],
            [29, 'smtp_pass', 'your-smtp-password', '2023-10-29 05:36:40', '2024-08-27 05:20:40'],
            [30, 'version', '1.2', '2023-10-29 05:36:40', '2023-10-29 05:36:40'],
            [31, 'student_email_verification', 'disable', '2023-10-29 05:36:40', '2023-12-05 00:54:45'],
            [32, 'instructor_application_note', 'Fill all the fields carefully and share if you want to share any document with us it will help us to evaluate you as an instructor. dfdfs', '2023-10-29 05:36:40', '2023-12-05 23:04:06'],
            [33, 'razorpay_keys', '[{\"active\":\"1\",\"key\":\"rzp_test_J60bqBOi1z1aF5\",\"secret_key\":\"uk935K7p4j96UCJgHK8kAU4q\",\"theme_color\":\"#c7a600\"}]', '2023-10-29 05:36:40', '2023-10-29 05:36:40'],
            [34, 'razorpay_currency', 'USD', '2023-10-29 05:36:40', '2023-10-29 05:36:40'],
            [35, 'fb_app_id', 'fb-app-id', '2023-10-29 05:36:40', '2023-10-29 05:36:40'],
            [36, 'fb_app_secret', 'fb-app-secret', '2023-10-29 05:36:40', '2023-10-29 05:36:40'],
            [37, 'fb_social_login', '0', '2023-10-29 05:36:40', '2023-10-29 05:36:40'],
            [38, 'drip_content_settings', '{\"lesson_completion_role\":\"duration\",\"minimum_duration\":\"15:30:00\",\"minimum_percentage\":\"80\"}', '2023-10-29 05:36:40', '2023-10-29 05:36:40'],
        ];

        foreach ($settings as $setting) {
            DB::table('settings')->insert([
                'id' => $setting[0],
                'key' => $setting[1],
                'value' => $setting[2],
                'created_at' => $setting[3],
                'updated_at' => $setting[4],
            ]);
        }
    }
}
