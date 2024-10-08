<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('blog_comments', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key named 'id'
            $table->unsignedBigInteger('blog_id')->nullable(); // int(11) DEFAULT NULL
            $table->unsignedBigInteger('user_id')->nullable(); // int(11) DEFAULT NULL
            $table->unsignedBigInteger('parent_id')->nullable(); // int(11) DEFAULT NULL (for threaded comments)
            $table->integer('check')->nullable(); // int(11) DEFAULT NULL
            $table->longText('comment')->nullable(); // longtext COLLATE utf8_unicode_ci
            $table->longText('likes')->nullable(); // longtext COLLATE utf8_unicode_ci (consider changing this to an integer)
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_comments');
    }
}