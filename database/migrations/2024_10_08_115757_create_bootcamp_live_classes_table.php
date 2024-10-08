<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBootcampLiveClassesTable extends Migration
{
    public function up()
    {
        Schema::create('bootcamp_live_classes', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key named 'id'
            $table->unsignedBigInteger('module_id')->nullable(); // int(11) DEFAULT NULL
            $table->foreign('module_id')->references('id')->on('bootcamp_modules')->onDelete('cascade'); // Assuming 'modules' is your related table
            $table->string('title')->nullable(); // varchar(255) DEFAULT NULL
            $table->string('slug')->nullable(); // varchar(255) DEFAULT NULL
            $table->longText('description')->nullable(); // longtext
            $table->integer('start_time')->nullable(); // int(11) DEFAULT NULL
            $table->integer('end_time')->nullable(); // int(11) DEFAULT NULL
            $table->integer('sort')->nullable(); // int(11) DEFAULT NULL
            $table->string('status')->nullable(); // varchar(255) DEFAULT NULL
            $table->string('provider')->nullable(); // varchar(255) DEFAULT NULL
            $table->longText('joining_data')->nullable(); // longtext
            $table->integer('force_stop')->default(0); // int(11) NOT NULL DEFAULT '0'
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('bootcamp_live_classes');
    }
}
