<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         $this->call(BuilderPagesSeeder::class);
        $this->call(FrontendSettingsSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(CurrencySeeder::class);
         $this->call(HomePageSettingsSeeder::class);
         $this->call(AdminsTableSeeder::class);
      
    }
}
