<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'role' => 'admin',
                'email' => 'admin@eulogia.net',
                'status' => 1, // Active status
                'name' => 'Mr Eulogia',
                'phone' => '07048102345',
                'website' => 'https://eulogia.net',
                'skills' => 'Management, Leadership, Communication',
                'facebook' => 'https://facebook.com/admin',
                'twitter' => 'https://twitter.com/admin',
                'linkedin' => 'https://linkedin.com/in/admin',
                'address' => '123 Admin Street, Admin City',
                'about' => 'This is an admin account.',
                'biography' => 'Admin with extensive experience in managing platforms.',
                'photo' => 'path/to/photo.jpg',
                'email_verified_at' => now(), // Set current time for verification
                'password' => Hash::make('password123'), // Securely hashed password
                'remember_token' => null,
                'paymentkeys' => null,
                'created_at' => now(), // Automatically sets the created timestamp
                'updated_at' => now(), // Automatically sets the updated timestamp
            ]]);
    }
}
