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
        Schema::create('bootcamp_resources', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key named 'id'
            $table->unsignedBigInteger('module_id')->nullable(); // int(11) DEFAULT NULL
            $table->string('title')->nullable(); // varchar(255) DEFAULT NULL
            $table->string('upload_type')->nullable(); // varchar(255) DEFAULT NULL
            $table->string('file')->nullable(); // varchar(255) DEFAULT NULL
            $table->timestamps(0); // created_at and updated_at with precision
            $table->timestamp('uploaded_at')->default(DB::raw('CURRENT_TIMESTAMP')); // uploaded_at

            // Foreign key constraint
            $table->foreign('module_id')->references('id')->on('bootcamp_modules')->onDelete('cascade'); // Assuming 'bootcamp_modules' is your related table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bootcamp_resources');
    }
};
