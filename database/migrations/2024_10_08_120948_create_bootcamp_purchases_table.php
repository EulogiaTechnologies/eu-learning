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
        Schema::create('bootcamp_purchases', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key named 'id'
            $table->string('invoice')->nullable(); // varchar(255) DEFAULT NULL
            $table->unsignedBigInteger('user_id')->nullable(); // int(11) DEFAULT NULL
            $table->unsignedBigInteger('bootcamp_id')->nullable(); // int(11) DEFAULT NULL
            $table->double('price', )->nullable(); // double(10,2) DEFAULT NULL
            $table->double('tax', )->nullable(); // double(10,2) DEFAULT NULL
            $table->string('payment_method')->nullable(); // varchar(255) DEFAULT NULL
            $table->text('payment_details')->nullable(); // text
            $table->integer('status')->default(0); // int(11) NOT NULL DEFAULT '0'
            $table->timestamps(); // created_at and updated_at
            $table->double('admin_revenue', )->nullable(); // double(10,2) DEFAULT NULL
            $table->double('instructor_revenue', )->nullable(); // double(10,2) DEFAULT NULL

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Adjust 'users' to your actual user table name
            $table->foreign('bootcamp_id')->references('id')->on('bootcamps')->onDelete('cascade'); // Assuming 'bootcamps' is your related table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bootcamp_purchases');
    }
};
