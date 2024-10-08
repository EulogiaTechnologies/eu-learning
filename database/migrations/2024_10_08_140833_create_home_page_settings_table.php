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
        Schema::create('home_page_settings', function (Blueprint $table) {
            $table->increments('id'); // Auto-incrementing primary key
            $table->integer('home_page_id')->nullable(); // Foreign key if needed
            $table->string('key')->collate('utf8_unicode_ci')->nullable(); // Setting key
            $table->longText('value')->collate('utf8_unicode_ci')->nullable(); // Setting value
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_settings');
    }
};
