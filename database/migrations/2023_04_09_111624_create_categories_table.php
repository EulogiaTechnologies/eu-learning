<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id'); // UNSIGNED big int for primary key
            $table->unsignedBigInteger('parent_id')->default(0); // UNSIGNED big int with default '0'
            $table->string('title', 255)->nullable(); // VARCHAR(255) DEFAULT NULL
            $table->string('slug', 255)->nullable(); // VARCHAR(255) DEFAULT NULL
            $table->string('icon', 255)->nullable(); // VARCHAR(255) DEFAULT NULL
            $table->integer('sort')->default(0); // INT(11) DEFAULT '0'
            $table->integer('status')->nullable(); // INT(11) DEFAULT NULL
            $table->string('keywords', 400)->nullable(); // VARCHAR(400) DEFAULT NULL
            $table->string('description', 500)->nullable(); // VARCHAR(500) DEFAULT NULL
            $table->string('thumbnail', 255)->nullable(); // VARCHAR(255) DEFAULT NULL
            $table->string('category_logo', 255)->nullable(); // VARCHAR(255) DEFAULT NULL
            $table->timestamp('created_at')->nullable(); // Timestamp NULL
            $table->timestamp('updated_at')->nullable(); // Timestamp NULL
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
