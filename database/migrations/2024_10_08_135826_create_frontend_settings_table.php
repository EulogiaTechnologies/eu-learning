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
       
            Schema::create('frontend_settings', function (Blueprint $table) {
                $table->id(); // Creates an auto-incrementing primary key `id`
                $table->string('key', 255)->nullable(); // Field for the setting key
                $table->longText('value')->nullable(); // Field for the setting value
                $table->timestamps(); // Creates `created_at` and `updated_at` timestamps
            });
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frontend_settings');
    }
};
