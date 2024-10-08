<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Programs table (previously bootcamps)
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id'); // Owner of the program
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->text('short_description')->nullable();
            $table->boolean('is_paid')->default(0);
            $table->decimal('price', 10, 2)->nullable();
            $table->boolean('discount_flag')->default(0);
            $table->decimal('discounted_price', 10, 2)->nullable();
            $table->string('thumbnail')->nullable();
            $table->longText('meta_keywords')->nullable();
            $table->longText('meta_description')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Pivot table for program instructors
        Schema::create('program_instructors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('instructor_id');

            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->foreign('instructor_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Cohorts table
        Schema::create('cohorts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id');
            $table->string('title')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
        });

        // Modules table (program's modules)
        Schema::create('program_modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id');
            $table->string('title')->nullable();
            $table->integer('publish_date')->nullable();
            $table->integer('expiry_date')->nullable();
            $table->integer('sort_order')->nullable();
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
        });

        // Submodules - Class Resources
        Schema::create('modules_class_resources', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->string('title');
            $table->string('file_type');
            $table->string('file_path');
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('program_modules')->onDelete('cascade');
        });

        // Submodules - Discussion Groups
        Schema::create('modules_discussion_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->string('title');
            $table->longText('description');
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('program_modules')->onDelete('cascade');
        });

        // Submodules - Assignments
        Schema::create('modules_assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->string('title');
            $table->longText('instructions');
            $table->dateTime('due_date');
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('program_modules')->onDelete('cascade');
        });

        // Submodules - Quizzes
        Schema::create('modules_quizzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->string('title');
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('program_modules')->onDelete('cascade');
        });

        // Submodules - Live Classes
        Schema::create('modules_live_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->string('title');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('provider')->nullable();  // e.g., Zoom, Google Meet
            $table->longText('joining_data')->nullable(); // e.g., meeting links
            $table->boolean('force_stop')->default(false);
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('program_modules')->onDelete('cascade');
        });

        // Submodules - Recorded Classes
        Schema::create('modules_recorded_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->string('title');
            $table->string('video_url');
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('program_modules')->onDelete('cascade');
        });

        // Submodules - Notes
        Schema::create('modules_notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->text('note');
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('program_modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules_notes');
        Schema::dropIfExists('modules_recorded_classes');
        Schema::dropIfExists('modules_live_classes');
        Schema::dropIfExists('modules_quizzes');
        Schema::dropIfExists('modules_assignments');
        Schema::dropIfExists('modules_discussion_groups');
        Schema::dropIfExists('modules_class_resources');
        Schema::dropIfExists('program_modules');
        Schema::dropIfExists('cohorts');
        Schema::dropIfExists('program_instructors');
        Schema::dropIfExists('programs');
    }
};
