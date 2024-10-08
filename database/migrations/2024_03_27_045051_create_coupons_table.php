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
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing big integer as primary key
            $table->unsignedBigInteger('user_id')->nullable(); // Foreign key (to users table), nullable
            $table->string('code', 255)->nullable(); // Code, varchar(255), nullable
            $table->float('discount', )->nullable(); // Discount, float(10,2), nullable
            $table->string('expiry', 255)->nullable(); // Expiry date, varchar(255), nullable
            $table->integer('status')->nullable(); // Status, integer, nullable
            $table->timestamps(); // Adds created_at and updated_at columns with CURRENT_TIMESTAMP default
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
