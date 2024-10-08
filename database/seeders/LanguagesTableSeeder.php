<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'id' => 3,
            'name' => 'English',
            'direction' => 'ltr',
            'created_at' => '2024-04-08 10:42:26',
            'updated_at' => '2024-04-09 01:12:02',
        ]);
    }
}
