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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id(); // Primary key as big integer, auto-increment
            $table->string('tokenable_type'); // Type of the related model
            $table->unsignedBigInteger('tokenable_id'); // ID of the related model
            $table->string('name'); // Name of the token
            $table->string('token', 64); // Token value (up to 64 characters)
            $table->text('abilities')->nullable(); // Token abilities as text
            $table->timestamp('last_used_at')->nullable(); // Timestamp of when token was last used
            $table->timestamp('expires_at')->nullable(); // Timestamp for token expiration
            $table->timestamps(); // Automatically adds 'created_at' and 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
