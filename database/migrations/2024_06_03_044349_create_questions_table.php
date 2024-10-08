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
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_id')->nullable();
            $table->longText('title')->collation('utf8mb4_unicode_ci');
            $table->string('type', 255)->nullable()->collation('utf8mb4_unicode_ci');
            $table->mediumText('answer')->collation('utf8mb4_unicode_ci')->nullable();
            $table->longText('options')->collation('utf8mb4_unicode_ci')->nullable();
            $table->integer('sort')->nullable();
            $table->timestamps(); // This includes both created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
