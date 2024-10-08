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
        Schema::create('watch_histories', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing bigint primary key
            $table->unsignedInteger('course_id')->nullable(); // Course ID
            $table->unsignedInteger('student_id')->nullable(); // Student ID
            $table->longText('completed_lesson')->nullable(); // Completed lessons
            $table->string('watching_lesson_id', 11)->nullable(); // Currently watching lesson ID
            $table->string('completed_date', 11)->nullable(); // Completion date
            $table->timestamps(); // Creates created_at and updated_at columns
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watch_histories');
    }
};
