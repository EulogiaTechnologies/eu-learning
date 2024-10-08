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
        Schema::create('team_package_members', function (Blueprint $table) {
            $table->increments('id'); // Use increments for auto-incrementing primary key
            $table->unsignedInteger('leader_id')->nullable(); // Allow null values
            $table->unsignedInteger('team_package_id')->nullable(); // Allow null values
            $table->unsignedInteger('member_id')->nullable(); // Allow null values
            $table->timestamps(); // Automatically creates created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_package_members');
    }
};
