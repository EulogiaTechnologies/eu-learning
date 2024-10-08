<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key named 'id'
            $table->string('title')->nullable(); // varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
            $table->string('subtitle')->nullable(); // varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
            $table->string('slug')->nullable(); // varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_categories');
    }
}