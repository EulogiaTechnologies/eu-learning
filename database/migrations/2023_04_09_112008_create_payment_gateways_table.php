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
        Schema::create('payment_gateways', function (Blueprint $table) {
            $table->bigIncrements('id'); // Unsigned big integer for primary key
            $table->string('identifier')->nullable(); // Nullable string for identifier
            $table->string('currency')->nullable(); // Nullable string for currency
            $table->string('title')->nullable(); // Nullable string for title
            $table->string('model_name')->nullable(); // Nullable string for model name
            $table->text('description')->nullable(); // Nullable text for description
            $table->text('keys')->nullable(); // Nullable text for keys
            $table->integer('status')->nullable(); // Nullable integer for status
            $table->integer('test_mode')->nullable(); // Nullable integer for test mode
            $table->integer('is_addon')->nullable(); // Nullable integer for addon check
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_gateways');
    }
};
