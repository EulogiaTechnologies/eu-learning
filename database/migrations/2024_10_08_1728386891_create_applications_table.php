<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key named 'id'
            $table->unsignedBigInteger('user_id')->nullable(); // int(11) DEFAULT NULL
            $table->string('phone')->nullable(); // varchar(255) DEFAULT NULL
            $table->longText('description')->nullable(); // longtext
            $table->string('document')->nullable(); // varchar(255) DEFAULT NULL
            $table->integer('status')->default(0); // int(11) DEFAULT '0'
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}