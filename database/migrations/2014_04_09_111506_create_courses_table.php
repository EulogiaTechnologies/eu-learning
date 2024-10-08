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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->string('title', 255)->nullable(); // Course title
            $table->string('slug', 255)->nullable(); // Slug for the course
            $table->text('short_description')->nullable(); // Short description
            $table->unsignedBigInteger('user_id')->nullable(); // Foreign key to users
            $table->unsignedBigInteger('category_id')->nullable(); // Foreign key to categories
            $table->string('course_type', 255)->nullable(); // Type of course
            $table->string('status', 255)->nullable(); // Course status
            $table->string('level', 255)->nullable(); // Difficulty level
            $table->string('language', 255)->nullable(); // Language of instruction
            $table->integer('is_paid')->nullable(); // Payment flag
            $table->integer('is_best')->default(0); // Flag for best course
            $table->double('price', )->nullable(); // Course price
            $table->double('discounted_price', )->nullable(); // Discounted price
            $table->integer('discount_flag')->nullable(); // Discount flag
            $table->text('meta_keywords')->nullable(); // SEO keywords
            $table->text('meta_description')->nullable(); // SEO description
            $table->string('thumbnail', 255)->nullable(); // Thumbnail URL
            $table->string('banner', 255)->nullable(); // Banner URL
            $table->string('preview', 255)->nullable(); // Preview video URL
            $table->mediumText('description')->nullable(); // Full description
            $table->mediumText('requirements')->nullable(); // Course requirements
            $table->mediumText('outcomes')->nullable(); // Learning outcomes
            $table->mediumText('faqs')->nullable(); // FAQs section
            $table->text('instructors')->nullable(); // List of instructors
            $table->integer('average_rating')->default(0); // Average rating
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
