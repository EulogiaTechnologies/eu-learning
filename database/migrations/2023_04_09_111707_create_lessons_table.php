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

     
            Schema::create('lessons', function (Blueprint $table) {
                $table->bigIncrements('id'); // Creates the id field as BIGINT
                $table->string('title')->collate('utf8mb4_unicode_ci')->nullable(); // Title of the lesson
                $table->unsignedBigInteger('user_id')->nullable(); // Foreign key to users table
                $table->unsignedBigInteger('course_id')->nullable(); // Foreign key to courses table
                $table->unsignedBigInteger('section_id')->nullable(); // Foreign key to sections table
                $table->string('lesson_type')->collate('utf8mb4_unicode_ci')->nullable(); // Type of the lesson
                $table->string('duration')->collate('utf8mb4_unicode_ci')->nullable(); // Duration of the lesson
                $table->integer('total_mark')->nullable(); // Total marks for the lesson
                $table->integer('pass_mark')->nullable(); // Passing marks
                $table->integer('retake')->nullable(); // Number of retakes allowed
                $table->string('lesson_src')->collate('utf8mb4_unicode_ci')->nullable(); // Source of the lesson
                $table->longText('attachment')->collate('utf8mb4_unicode_ci')->nullable(); // Attachments related to the lesson
                $table->string('attachment_type')->collate('utf8mb4_unicode_ci')->nullable(); // Type of attachment
                $table->text('video_type')->collate('utf8mb4_unicode_ci')->nullable(); // Type of video
                $table->string('thumbnail')->collate('utf8mb4_unicode_ci')->nullable(); // Thumbnail for the lesson
                $table->integer('is_free')->nullable(); // Indicates if the lesson is free
                $table->integer('sort')->nullable(); // Sort order for the lesson
                $table->longText('description')->collate('utf8mb4_unicode_ci')->nullable(); // Description of the lesson
                $table->longText('summary')->collate('utf8mb4_unicode_ci')->nullable(); // Summary of the lesson
                $table->integer('status')->nullable(); // Status of the lesson
                $table->timestamps(); // Created_at and updated_at fields

                $table->index('user_id');
                $table->index('course_id');
                $table->index('section_id');
            });
        

      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
