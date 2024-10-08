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
        Schema::create('quiz_submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->longText('correct_answer')->nullable();
            $table->longText('wrong_answer')->nullable();
            $table->longText('submits')->nullable();
            $table->timestamps(); // This includes both created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_submissions');
    }
};
