<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up()
    // {
    //     Schema::create('migrations', function (Blueprint $table) {
    //         $table->increments('id'); // Primary key
    //         $table->string('migration')->unique(); // Migration name
    //         $table->integer('batch'); // Batch number for the migration
    //         $table->timestamps(); // Created_at and updated_at fields
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('migrations');
    }
};
