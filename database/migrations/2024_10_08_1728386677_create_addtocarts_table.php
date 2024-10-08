<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddtocartsTable extends Migration
{
    public function up()
    {
        Schema::create('addtocarts', function (Blueprint $table) {
		$table->integer('id',11);
		$table->unsignedBigInteger('course_id',)->nullable();
		$table->unsignedBigInteger('user_id',)->nullable();
		$table->timestamps();
		

        });
    }

    public function down()
    {
        Schema::dropIfExists('addtocarts');
    }
}