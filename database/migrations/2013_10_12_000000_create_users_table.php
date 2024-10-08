<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // This creates an auto-incrementing bigint primary key (equivalent to bigint(20) UNSIGNED)
            $table->string('role', 100); // Role of the user
            $table->string('email')->unique(); // Email field with unique constraint
            $table->integer('status')->nullable(); // Status of the user
            $table->string('name')->nullable(); // User's name
            $table->string('phone')->nullable(); // User's phone number
            $table->string('website')->nullable(); // User's website
            $table->text('skills')->nullable(); // User's skills
            $table->text('facebook')->nullable(); // Facebook link
            $table->string('twitter')->nullable(); // Twitter link
            $table->string('linkedin')->nullable(); // LinkedIn link
            $table->string('address')->nullable(); // User's address
            $table->text('about')->nullable(); // About section
            $table->longText('biography')->nullable(); // Biography
            $table->string('photo')->nullable(); // User's photo
            $table->timestamp('email_verified_at')->nullable(); // Email verification timestamp
            $table->string('password')->nullable(); // User's password
            $table->string('remember_token', 100)->nullable(); // Token for "remember me" functionality
            $table->longText('paymentkeys')->nullable(); // Payment keys
            $table->timestamps(); // Creates created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
