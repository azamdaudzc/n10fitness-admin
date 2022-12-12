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
        Schema::create('program_builder_day_exercise_sets', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('program_week_days');
            $table->foreign('program_week_days')->references('id')->on('program_builder_day_exercises')->onDelete('cascade');
            $table->tinyInteger('set_no')->nullable();
            $table->tinyInteger('rep_min_no')->nullable();
            $table->tinyInteger('rep_max_no')->nullable();
            $table->float('rpe_no')->nullable();
            $table->string('load_text')->nullable();
            $table->string('rest_time')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('program_builder_day_exercise_sets');
    }
};
