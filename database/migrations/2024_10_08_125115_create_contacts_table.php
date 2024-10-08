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
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key, unsigned big int
            $table->string('name', 255)->nullable()->collation('utf8_unicode_ci'); // Name, varchar(255), nullable
            $table->string('email', 255)->nullable()->collation('utf8_unicode_ci'); // Email, varchar(255), nullable
            $table->string('phone', 255)->nullable()->collation('utf8_unicode_ci'); // Phone, varchar(255), nullable
            $table->text('address')->nullable()->collation('utf8_unicode_ci'); // Address, text, nullable
            $table->text('message')->nullable()->collation('utf8_unicode_ci'); // Message, text, nullable
            $table->integer('has_read')->default(0); // has_read, int, default 0
            $table->integer('replied')->default(0); // replied, int, default 0
            $table->timestamp('created_at')->useCurrent()->nullable(); // created_at with CURRENT_TIMESTAMP as default, nullable
            $table->timestamp('updated_at')->useCurrent()->nullable(); // updated_at with CURRENT_TIMESTAMP as default, nullable
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
