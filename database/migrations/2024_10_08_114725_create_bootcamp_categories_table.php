<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBootcampCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('bootcamp_categories', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key named 'id'
            $table->string('title')->nullable(); // varchar(255) DEFAULT NULL
            $table->string('slug')->nullable(); // varchar(255) DEFAULT NULL
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('bootcamp_categories');
    }
}
