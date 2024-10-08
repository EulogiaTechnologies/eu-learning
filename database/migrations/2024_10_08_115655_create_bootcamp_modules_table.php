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
         Schema::create('bootcamp_modules', function (Blueprint $table) {
             $table->id(); // Creates an auto-incrementing primary key named 'id'
             $table->unsignedBigInteger('bootcamp_id')->nullable();
             $table->foreign('bootcamp_id')->references('id')->on('bootcamps')->onDelete('cascade'); // Assuming 'bootcamps' is your related table             
             $table->string('title')->nullable(); // varchar(255) DEFAULT NULL
             $table->integer('publish_date')->nullable(); // int(11) DEFAULT NULL
             $table->integer('expiry_date')->nullable(); // int(11) DEFAULT NULL
             $table->string('restriction')->nullable(); // varchar(255) DEFAULT NULL
             $table->integer('sort')->nullable(); // int(11) DEFAULT NULL
             $table->timestamps(); // created_at and updated_at
         });
     }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bootcamp_modules');
    }
};
