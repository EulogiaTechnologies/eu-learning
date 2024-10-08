<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key named 'id'
            $table->unsignedBigInteger('user_id')->nullable(); // int(11) DEFAULT NULL
            $table->string('category_id')->nullable(); // varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
            $table->string('title')->nullable(); // varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
            $table->string('slug')->nullable(); // varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
            $table->longText('description')->nullable(); // longtext COLLATE utf8_unicode_ci
            $table->string('thumbnail')->nullable(); // varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
            $table->string('banner')->nullable(); // varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
            $table->text('keywords')->nullable(); // text COLLATE utf8_unicode_ci
            $table->integer('is_popular')->nullable(); // int(11) DEFAULT NULL
            $table->integer('status')->nullable(); // int(11) DEFAULT NULL
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
