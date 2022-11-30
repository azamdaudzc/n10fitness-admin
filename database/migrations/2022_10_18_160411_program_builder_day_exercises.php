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
        Schema::create('program_builder_day_exercises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('builder_week_day_id');
            $table->unsignedBigInteger('exercise_library_id');
            $table->foreign('builder_week_day_id')->references('id')->on('program_builder_week_days')->onDelete('cascade');
            $table->foreign('exercise_library_id')->references('id')->on('exercise_libraries')->onDelete('cascade');
            $table->tinyInteger('sets_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_builder_day_exercises');
    }
};
