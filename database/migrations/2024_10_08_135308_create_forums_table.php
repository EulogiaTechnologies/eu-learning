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
        Schema::create('forums', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key `id`
            $table->unsignedBigInteger('user_id')->nullable(); // Foreign key for user ID
            $table->unsignedBigInteger('course_id')->nullable(); // Foreign key for course ID
            $table->unsignedBigInteger('parent_id')->default(0); // Parent forum ID for nested replies
            $table->string('title')->nullable(); // Title of the forum post
            $table->longText('description')->nullable(); // Description of the forum post
            $table->longText('likes')->nullable(); // Field for likes (consider using a separate table for better structure)
            $table->longText('dislikes')->nullable(); // Field for dislikes (consider using a separate table for better structure)
            $table->timestamps(); // Creates `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forums');
    }
};
