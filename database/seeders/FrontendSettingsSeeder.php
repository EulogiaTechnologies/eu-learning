<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrontendSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frontend_settings')->insert([
            ['id' => 1, 'key' => 'banner_title', 'value' => 'Start learning from the world’s pro Instructors', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 2, 'key' => 'banner_sub_title', 'value' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 4, 'key' => 'about_us', 'value' => '<div>Limitless learning at your fingertips</div><div><br></div><div>Limitless learning at your fingertipsAdvertising a busines online includes assembling the they awesome site. Having the most well-planned on to the our SEO services keep you on the top a business Having the moston to the online.</div><div><br></div><div><br></div><div><br></div><div>Advertising a busines online includes assembling the they awesome site.</div><div><br></div><div><br></div><div>Range including technical skills</div><div>Range including technical skills</div><div>Range including technical skills</div><div><br></div>', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 10, 'key' => 'terms_and_condition', 'value' => '<h2>Terms and Condition</h2>', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 11, 'key' => 'privacy_policy', 'value' => '<p></p><p></p><h2><span xss="removed">Privacy Policy</span></h2>', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 13, 'key' => 'theme', 'value' => 'default', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2023-10-31 11:08:12'],
            ['id' => 14, 'key' => 'cookie_note', 'value' => 'This website uses cookies to personalize content and analyse traffic in order to offer you a better experience.', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 15, 'key' => 'cookie_status', 'value' => 'active', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 16, 'key' => 'cookie_policy', 'value' => '<h2 class="">Cookie policy</h2><ol><li>Cookies are small text files that can be used by websites to make a user\'s experience more efficient.</li><li>The law states that we can store cookies on your device if they are strictly necessary for the operation of this site. For all other types of cookies we need your permission.</li><li>This site uses different types of cookies. Some cookies are placed by third party services that appear on our pages.</li></ol>', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 17, 'key' => 'banner_image', 'value' => 'uploads/banner_image/banner-image-1717045923.png', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-29 23:12:03'],
            ['id' => 18, 'key' => 'light_logo', 'value' => 'uploads/light_logo/light-logo-1716985414.png', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-29 06:23:34'],
            ['id' => 19, 'key' => 'dark_logo', 'value' => 'uploads/dark_logo/dark-logo-1716985438.png', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-29 06:23:58'],
            ['id' => 20, 'key' => 'small_logo', 'value' => 'uploads/small_logo/small-logo-1712661659.jpg', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-04-09 05:20:59'],
            ['id' => 21, 'key' => 'favicon', 'value' => 'uploads/favicon/favicon-1716985458.png', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-29 06:24:18'],
            ['id' => 22, 'key' => 'recaptcha_status', 'value' => '0', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2023-11-01 23:27:24'],
            ['id' => 23, 'key' => 'recaptcha_secretkey', 'value' => 'Valid-secret-key', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2023-11-01 23:27:24'],
            ['id' => 24, 'key' => 'recaptcha_sitekey', 'value' => 'Valid-site-key', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2023-11-01 23:27:24'],
            ['id' => 25, 'key' => 'refund_policy', 'value' => '<h2><span xss="removed">Refund Policy</span></h2>', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 26, 'key' => 'facebook', 'value' => 'https://facebook.com', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 27, 'key' => 'twitter', 'value' => 'https://twitter.com', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 28, 'key' => 'linkedin', 'value' => 'https://linkedin.com', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 31, 'key' => 'blog_page_title', 'value' => 'Where possibilities begin', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2023-10-31 11:08:12'],
            ['id' => 32, 'key' => 'blog_page_subtitle', 'value' => 'We’re a leading marketplace platform for learning and teaching online. Explore some of our most popular content and learn something new.', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2023-10-31 11:08:12'],
            ['id' => 33, 'key' => 'blog_page_banner', 'value' => 'blog-page.png', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2023-10-31 11:08:12'],
            ['id' => 34, 'key' => 'instructors_blog_permission', 'value' => '1', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2023-12-07 00:28:58'],
            ['id' => 35, 'key' => 'blog_visibility_on_the_home_page', 'value' => '1', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2023-12-07 00:28:58'],
            ['id' => 37, 'key' => 'website_faqs', 'value' => '[{"question":"How to create an account?","answer":"Interactively procrastinate high-payoff content without backward-compatible data. Quickly to cultivate optimal processes and tactical architectures. For The Completely iterate covalent strategic."},{"question":"Do you provide any support for this kit?","answer":"Interactively procrastinate high-payoff content without backward-compatible data. Quickly to cultivate optimal processes and tactical architectures. For The Completely iterate covalent strategic."},{"question":"How to create an account?","answer":"Interactively procrastinate high-payoff content without backward-compatible data. Quickly to cultivate optimal processes and tactical architectures. For The Completely iterate covalent strategic."},{"question":"How long do you provide support?","answer":"Interactively procrastinate high-payoff content without backward-compatible data. Quickly to cultivate optimal processes and tactical architectures. For The Completely iterate covalent strategic."}]', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-09-11 04:57:12'],
            ['id' => 38, 'key' => 'motivational_speech', 'value' => '[{"title":"Jenny Murtagh","designation":"Graphic Design","description":"Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even for slightly believable randomised words.","image":"I6zvV1Mr30YUhLfJgwje.png"},{"title":"Jenny Murtagh","designation":"Graphic Design","description":"Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even for slightly believable randomised words.","image":"ZLfkhGame7sYQvqKxD0J.png"},{"title":"Jenny Murtagh","designation":"Graphic Design","description":"Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even for slightly believable randomised words.","image":"xBYkXnfvmPiU3j0CzME1.png"}]', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-09-11 04:57:18'],
            ['id' => 39, 'key' => 'home_page', 'value' => NULL, 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-09-11 22:38:57'],
            ['id' => 40, 'key' => 'contact_info', 'value' => '{"email":"creativeitem@example.com","phone":"67564345676","address":"629 12th St, Modesto","office_hours":"8","location":"40.689880, -74.045203"}', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-09-11 04:57:26'],
            ['id' => 41, 'key' => 'promo_video_provider', 'value' => 'youtube', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 42, 'key' => 'promo_video_link', 'value' => 'https://youtu.be/4QCaXTOwigw?si=NsFeBQhWNZC859-l', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2024-05-13 05:51:22'],
            ['id' => 43, 'key' => 'mobile_app_link', 'value' => '', 'created_at' => '2023-10-31 11:08:12', 'updated_at' => '2023-12-07 00:28:58'],
        ]);
    }
}
