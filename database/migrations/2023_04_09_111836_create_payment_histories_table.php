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
    {Schema::create('payment_histories', function (Blueprint $table) {
        $table->id(); // Creates an auto-incrementing BIGINT id
        $table->unsignedBigInteger('user_id')->nullable();
        $table->unsignedBigInteger('course_id')->nullable(); // Use unsignedBigInteger for course_id
        $table->string('payment_type', 255)->nullable();
        $table->float('amount')->nullable(); // Precision/scale not needed
        $table->float('admin_revenue')->nullable(); // Precision/scale not needed
        $table->float('instructor_revenue')->nullable(); // Precision/scale not needed
        $table->float('tax')->nullable(); // Precision/scale not needed
        $table->string('coupon', 255)->nullable();
        $table->string('invoice', 255)->nullable();
        $table->integer('instructor_payment_status')->nullable(); // Use integer without size
        $table->string('transaction_id', 255)->nullable();
        $table->string('session_id', 255)->nullable();
        $table->timestamps(); // This will create created_at and updated_at columns
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_histories');
    }
};
