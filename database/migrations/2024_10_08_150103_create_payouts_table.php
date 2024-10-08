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
        Schema::create('payouts', function (Blueprint $table) {
            $table->id(); // Auto increment primary key
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('payment_type', 255)->nullable();
            $table->double('amount')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps(); // Automatically adds `created_at` and `updated_at` columns with default timestamps

            // Optionally add foreign key constraint if 'user_id' references 'users' table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payouts');
    }
};
