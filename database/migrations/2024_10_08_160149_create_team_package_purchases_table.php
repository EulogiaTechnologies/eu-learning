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
        Schema::create('team_package_purchases', function (Blueprint $table) {
            $table->increments('id'); // Use increments for auto-incrementing primary key
            $table->string('invoice')->nullable(); // VARCHAR column for invoice
            $table->unsignedInteger('user_id')->nullable(); // Foreign key for user
            $table->unsignedInteger('package_id')->nullable(); // Foreign key for package
            $table->float('price', )->nullable(); // Price with two decimal points
            $table->float('admin_revenue', )->nullable(); // Admin revenue
            $table->float('instructor_revenue', )->nullable(); // Instructor revenue
            $table->float('tax', )->nullable(); // Tax amount
            $table->string('payment_method')->nullable(); // Payment method
            $table->text('payment_details')->nullable(); // Payment details
            $table->unsignedInteger('status')->nullable(); // Status of the purchase
            $table->timestamps(); // Automatically creates created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_package_purchases');
    }
};
