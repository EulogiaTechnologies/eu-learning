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
        Schema::create('currencies', function (Blueprint $table) {
            $table->increments('id'); // Primary key
            $table->string('name', 255)->nullable(); // Currency name
            $table->string('code', 255)->nullable(); // Currency code
            $table->string('symbol', 255)->nullable(); // Currency symbol
            $table->integer('paypal_supported')->nullable(); // Paypal support flag
            $table->integer('stripe_supported')->nullable(); // Stripe support flag
            $table->integer('ccavenue_supported')->default(0); // CCAvenue support flag
            $table->integer('iyzico_supported')->default(0); // Iyzico support flag
            $table->integer('paystack_supported')->default(0); // Paystack support flag
            $table->timestamps(); // Adds created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
