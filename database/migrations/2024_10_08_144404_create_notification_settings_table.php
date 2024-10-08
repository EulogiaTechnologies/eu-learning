<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_settings', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('type')->nullable();
            $table->integer('is_editable')->nullable();
            $table->string('addon_identifier')->nullable();
            $table->string('user_types', 400)->nullable();
            $table->string('system_notification', 400)->nullable();
            $table->string('email_notification', 400)->nullable();
            $table->string('subject')->nullable();
            $table->longText('template')->nullable();
            $table->string('setting_title')->nullable();
            $table->string('setting_sub_title')->nullable();
            $table->string('date_updated')->nullable();
            $table->timestamps(); // created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notification_settings');
    }
}
