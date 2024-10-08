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
        Schema::create('user_reviews', function (Blueprint $table) {
            $table->id(); // This creates an auto-incrementing bigint primary key
            $table->unsignedBigInteger('user_id')->nullable(); // Foreign key to users table
            $table->integer('rating')->nullable(); // Rating given by the user
            $table->longText('review')->nullable(); // Review text
            $table->timestamps(); // Creates created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_reviews');
    }
};
