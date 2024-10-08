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
        Schema::create('team_training_packages', function (Blueprint $table) {
            $table->increments('id'); // Use increments for auto-incrementing primary key
            $table->unsignedInteger('user_id')->nullable(); // Foreign key for user
            $table->string('title')->nullable(); // Package title
            $table->string('slug')->nullable(); // Slug for SEO
            $table->double('price', )->nullable(); // Price with two decimal points
            $table->string('course_privacy')->nullable(); // Privacy settings for the course
            $table->unsignedInteger('course_id')->nullable(); // Foreign key for course
            $table->integer('allocation')->nullable(); // Allocation (number of students, etc.)
            $table->string('expiry_type')->nullable(); // Type of expiry (duration, date, etc.)
            $table->integer('start_date')->nullable(); // Start date as UNIX timestamp
            $table->integer('expiry_date')->nullable(); // Expiry date as UNIX timestamp
            $table->longText('features')->nullable(); // Features of the training package
            $table->string('thumbnail')->nullable(); // Thumbnail for the package
            $table->unsignedInteger('pricing_type')->nullable(); // Pricing type identifier
            $table->unsignedInteger('status')->nullable(); // Status of the package
            $table->timestamps(); // Automatically creates created_at and updated_at columns
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_training_packages');
    }
};
