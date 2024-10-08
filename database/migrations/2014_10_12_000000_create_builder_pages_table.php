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
        Schema::create('builder_pages', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key named 'id'
            $table->string('name')->nullable(); // varchar(255) DEFAULT NULL
            $table->longText('html')->nullable(); // longtext
            $table->string('identifier')->nullable(); // varchar(255) DEFAULT NULL
            $table->integer('is_permanent')->nullable(); // int(11) DEFAULT NULL
            $table->integer('status')->nullable(); // int(11) DEFAULT NULL
            $table->integer('edit_home_id')->nullable(); // int(11) DEFAULT NULL
            $table->timestamps(); // created_at and updated_at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('builder_pages');
    }
};
