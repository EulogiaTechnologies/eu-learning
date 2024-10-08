<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class  extends Migration
{
    public function up()
    {
        Schema::create('bootcamps', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key named 'id'
            $table->unsignedBigInteger('user_id')->nullable(); // int(11) DEFAULT NULL
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Assuming 'users' is your related table
            $table->string('title')->nullable(); // varchar(255) DEFAULT NULL
            $table->string('slug')->nullable(); // varchar(255) DEFAULT NULL
            $table->unsignedBigInteger('category_id')->nullable(); // int(11) DEFAULT NULL
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Assuming 'categories' is your related table
            $table->longText('description')->nullable(); // longtext
            $table->text('short_description')->nullable(); // text
            $table->integer('is_paid')->nullable(); // int(11) DEFAULT NULL
            $table->double('price',)->nullable(); // double(10,2) DEFAULT NULL
            $table->integer('discount_flag')->nullable(); // int(11) DEFAULT NULL
            $table->double('discounted_price',)->nullable(); // double(10,2) DEFAULT NULL
            $table->integer('publish_date')->nullable(); // int(11) DEFAULT NULL
            $table->string('thumbnail')->nullable(); // varchar(255) DEFAULT NULL
            $table->longText('faqs')->nullable(); // longtext
            $table->longText('requirements')->nullable(); // longtext
            $table->longText('outcomes')->nullable(); // longtext
            $table->text('meta_keywords')->nullable(); // text
            $table->longText('meta_description')->nullable(); // longtext
            $table->integer('status')->nullable(); // int(11) DEFAULT NULL
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('bootcamps');
    }
};