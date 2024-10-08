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
        Schema::create('instructor_reviews', function (Blueprint $table) {
            $table->id(); // Automatically create an `id` column as an auto-incrementing primary key
            $table->unsignedBigInteger('user_id')->nullable(); // User ID who is reviewing
            $table->unsignedBigInteger('instructor_id')->nullable(); // Instructor ID being reviewed
            $table->string('rating', 244)->nullable(); // Rating given by the user
            $table->longText('review')->nullable(); // Review text
            $table->timestamps(); // Automatically create created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor_reviews');
    }
};
