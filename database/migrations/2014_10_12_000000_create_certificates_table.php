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
        Schema::create('certificates', function (Blueprint $table) {
            $table->bigIncrements('id'); // UNSIGNED big int for primary key
            $table->unsignedBigInteger('user_id')->nullable(); // UNSIGNED big int for user_id, nullable
            $table->unsignedBigInteger('course_id')->nullable(); // UNSIGNED big int for course_id, nullable
            $table->string('identifier', 255)->collation('utf8mb4_unicode_ci')->nullable(false); // VARCHAR(255) with utf8mb4_unicode_ci collation, NOT NULL
            $table->timestamp('created_at')->nullable(); // Timestamp for created_at, nullable
            $table->timestamp('updated_at')->nullable(); // Timestamp for updated_at, nullable

            // Foreign key constraints can be added here if user and course tables exist
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
