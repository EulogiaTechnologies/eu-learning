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
        Schema::create('device_ips', function (Blueprint $table) {
            $table->id(); // This will create an auto-incrementing primary key `id`
            $table->unsignedBigInteger('user_id')->nullable(); // Use unsignedBigInteger for user_id
            $table->string('ip_address')->nullable(); // VARCHAR(255)
            $table->string('user_agent')->nullable(); // VARCHAR(255)
            $table->timestamps(); // This will create `created_at` and `updated_at` fields
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_ips');
    }
};
