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
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id'); // Creates the id field as INT
            $table->unsignedInteger('thread_id')->nullable(); // Thread ID for the message
            $table->unsignedInteger('sender_id')->nullable(); // Sender's User ID
            $table->unsignedInteger('receiver_id')->nullable(); // Receiver's User ID
            $table->longText('message'); // The actual message content
            $table->integer('read')->default(0); // Read status: 0 for unread, 1 for read
            $table->timestamps(); // Created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
