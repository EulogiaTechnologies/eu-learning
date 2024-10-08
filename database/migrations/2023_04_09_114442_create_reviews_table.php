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
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('rating')->nullable();
            $table->string('review_type')->nullable();
            $table->longText('review')->nullable();
            $table->timestamps(); // This includes both created_at and updated_at fields
        });}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
