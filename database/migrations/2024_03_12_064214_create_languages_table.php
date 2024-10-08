<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('id'); // Creates an auto-incrementing BIGINT id
            $table->string('name', 255)->collate('utf8mb4_unicode_ci')->notNullable(); // Language name
            $table->string('direction', 255)->collate('utf8mb4_unicode_ci')->notNullable(); // Text direction (e.g., left-to-right, right-to-left)
            $table->timestamps(); // Automatically adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};
