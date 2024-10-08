<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuilderPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('builder_pages')->insert([
            ['id' => 12, 'name' => 'Elegant', 'html' => '', 'identifier' => 'elegant', 'is_permanent' => 1, 'status' => 0, 'edit_home_id' => null, 'created_at' => '2024-08-27 04:25:11', 'updated_at' => '2024-09-11 22:38:57'],
            ['id' => 13, 'name' => 'Kindergarden', 'html' => null, 'identifier' => 'kindergarden', 'is_permanent' => 1, 'status' => 0, 'edit_home_id' => 1, 'created_at' => '2024-08-27 04:25:11', 'updated_at' => '2024-09-11 22:38:57'],
            ['id' => 14, 'name' => 'Cooking', 'html' => null, 'identifier' => 'cooking', 'is_permanent' => 1, 'status' => 0, 'edit_home_id' => 1, 'created_at' => '2024-08-27 04:25:11', 'updated_at' => '2024-09-11 22:38:57'],
            ['id' => 15, 'name' => 'University', 'html' => null, 'identifier' => 'university', 'is_permanent' => 1, 'status' => 0, 'edit_home_id' => 1, 'created_at' => '2024-08-27 04:25:11', 'updated_at' => '2024-09-11 22:38:57'],
            ['id' => 16, 'name' => 'Language', 'html' => null, 'identifier' => 'language', 'is_permanent' => 1, 'status' => 0, 'edit_home_id' => null, 'created_at' => '2024-08-27 04:25:11', 'updated_at' => '2024-09-11 22:38:57'],
            ['id' => 17, 'name' => 'Development', 'html' => null, 'identifier' => 'development', 'is_permanent' => 1, 'status' => 0, 'edit_home_id' => 1, 'created_at' => '2024-08-27 04:25:11', 'updated_at' => '2024-09-11 22:38:57'],
            ['id' => 18, 'name' => 'Marketplace', 'html' => null, 'identifier' => 'marketplace', 'is_permanent' => 1, 'status' => 0, 'edit_home_id' => 1, 'created_at' => '2024-08-27 04:25:11', 'updated_at' => '2024-09-11 22:38:57'],
            ['id' => 19, 'name' => 'Meditation', 'html' => null, 'identifier' => 'meditation', 'is_permanent' => 1, 'status' => 0, 'edit_home_id' => 1, 'created_at' => '2024-08-27 04:25:11', 'updated_at' => '2024-09-11 22:38:57'],
            ['id' => 23, 'name' => 'Default', 'html' => '[\"top_bar\",\"header\",\"hero_banner\",\"features\",\"category\",\"featured_courses\",\"testimonial\",\"about_us\",\"blog\",\"faq\",\"footer\"]', 'identifier' => null, 'is_permanent' => null, 'status' => 1, 'edit_home_id' => null, 'created_at' => '2024-08-27 04:25:11', 'updated_at' => '2024-09-12 03:52:17'],
        ]);
    }
}
