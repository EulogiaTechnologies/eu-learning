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
        Schema::create('player_settings', function (Blueprint $table) {
            $table->increments('id'); // Primary key
            $table->string('title')->nullable(); // Title, can be null
            $table->longText('description')->nullable(); // Description, longtext, can be null
            $table->timestamps(); // Automatically adds 'created_at' and 'updated_at'
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_settings');
    }
};
