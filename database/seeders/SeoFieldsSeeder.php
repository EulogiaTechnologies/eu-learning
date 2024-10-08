<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_fields')->insert([
            [
                'id' => 1,
                'course_id' => null,
                'blog_id' => null,
                'route' => 'Home',
                'name_route' => 'home',
                'meta_title' => 'Home page',
                'meta_keywords' => null,
                'meta_description' => 'Home page for academy Seo',
                'meta_robot' => 'xxxxxx',
                'canonical_url' => 'https://academy.com',
                'custom_url' => 'https://academy.com',
                'json_ld' => '<script type="application/ld+json"> {   "@context": "http://schema.org",   "@type": "WebSite",   "name": "CodeCanyon",   "url": "https://codecanyon.net" } </script>',
                'og_title' => 'ooooooooo',
                'og_description' => 'zzzzzzzzzz',
                'og_image' => 'OG-home.jpg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'course_id' => null,
                'blog_id' => null,
                'route' => 'Compare',
                'name_route' => 'compare',
                'meta_title' => 'Course compare',
                'meta_keywords' => '[{"value":"course"},{"value":"compare"},{"value":"difference"}]',
                'meta_description' => 'Course compare',
                'meta_robot' => 'xxxxxx',
                'canonical_url' => 'https://academy.com/course-compare',
                'custom_url' => 'https://academy.com/course-compare',
                'json_ld' => null,
                'og_title' => 'Course compare',
                'og_description' => 'Course compare',
                'og_image' => '2-customer-php-version.PNG',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'course_id' => null,
                'blog_id' => null,
                'route' => 'Privacy',
                'name_route' => 'privacy.policy',
                'meta_title' => null,
                'meta_keywords' => null,
                'meta_description' => null,
                'meta_robot' => null,
                'canonical_url' => null,
                'custom_url' => null,
                'json_ld' => null,
                'og_title' => null,
                'og_description' => null,
                'og_image' => 'OG-documantation.jpg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'course_id' => null,
                'blog_id' => null,
                'route' => 'Refund',
                'name_route' => 'refund.policy',
                'meta_title' => null,
                'meta_keywords' => null,
                'meta_description' => null,
                'meta_robot' => null,
                'canonical_url' => null,
                'custom_url' => null,
                'json_ld' => null,
                'og_title' => null,
                'og_description' => null,
                'og_image' => 'OG-Blog.jpg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'course_id' => null,
                'blog_id' => null,
                'route' => 'Terms- condition',
                'name_route' => 'terms.condition',
                'meta_title' => null,
                'meta_keywords' => null,
                'meta_description' => null,
                'meta_robot' => null,
                'canonical_url' => null,
                'custom_url' => null,
                'json_ld' => null,
                'og_title' => null,
                'og_description' => null,
                'og_image' => 'OG-service.jpg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 6,
                'course_id' => null,
                'blog_id' => null,
                'route' => 'Faq',
                'name_route' => 'faq',
                'meta_title' => 'Creative elements - ui subscription system',
                'meta_keywords' => '[{"value":"ui kits"},{"value":"website template"},{"value":"video template"}]',
                'meta_description' => 'Best and affordable ui kit subscription system',
                'meta_robot' => null,
                'canonical_url' => null,
                'custom_url' => null,
                'json_ld' => null,
                'og_title' => null,
                'og_description' => null,
                'og_image' => 'OG-elements home.jpg',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
