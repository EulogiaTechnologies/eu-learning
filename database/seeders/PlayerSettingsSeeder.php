<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('player_settings')->insert([
            [
                'id' => 1,
                'title' => 'watermark_width',
                'description' => '100',
                'created_at' => '2024-08-27 11:25:27',
                'updated_at' => '2024-09-12 02:19:08',
            ],
            [
                'id' => 2,
                'title' => 'watermark_height',
                'description' => '24',
                'created_at' => '2024-08-27 11:25:27',
                'updated_at' => '2024-09-12 02:19:08',
            ],
            [
                'id' => 3,
                'title' => 'watermark_top',
                'description' => '10',
                'created_at' => '2024-08-27 11:25:27',
                'updated_at' => '2024-09-12 02:19:08',
            ],
            [
                'id' => 4,
                'title' => 'watermark_left',
                'description' => '10',
                'created_at' => '2024-08-27 11:25:27',
                'updated_at' => '2024-09-12 02:19:08',
            ],
            [
                'id' => 5,
                'title' => 'watermark_opacity',
                'description' => '30',
                'created_at' => '2024-08-27 11:25:27',
                'updated_at' => '2024-09-12 02:19:08',
            ],
            [
                'id' => 6,
                'title' => 'watermark_type',
                'description' => 'js',
                'created_at' => '2024-08-27 11:25:27',
                'updated_at' => '2024-09-12 02:19:08',
            ],
            [
                'id' => 7,
                'title' => 'watermark_logo',
                'description' => 'uploads/watermark/watermark-1724757927.png',
                'created_at' => '2024-08-27 11:25:27',
                'updated_at' => '2024-08-27 11:25:27',
            ],
        ]);
    }
}
