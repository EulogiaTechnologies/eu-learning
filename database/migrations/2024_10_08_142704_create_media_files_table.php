<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_files', function (Blueprint $table) {
            $table->increments('id'); // Creates the id field as INT
            $table->unsignedInteger('user_id')->nullable(); // User associated with the media file
            $table->unsignedInteger('post_id')->nullable(); // Post associated with the media file
            $table->unsignedInteger('story_id')->nullable(); // Story associated with the media file
            $table->unsignedInteger('album_id')->nullable(); // Album associated with the media file
            $table->unsignedInteger('product_id')->nullable(); // Product associated with the media file
            $table->unsignedInteger('page_id')->nullable(); // Page associated with the media file
            $table->unsignedInteger('group_id')->nullable(); // Group associated with the media file
            $table->unsignedInteger('chat_id')->nullable(); // Chat associated with the media file
            $table->string('file_name')->collate('utf8_unicode_ci')->nullable(); // Name of the file
            $table->string('file_type')->collate('utf8_unicode_ci')->nullable(); // Type of the file
            $table->string('privacy', 200)->collate('utf8_unicode_ci')->nullable(); // Privacy setting for the file
            $table->timestamps(); // Created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_files');
    }
}
