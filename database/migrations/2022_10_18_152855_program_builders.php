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
        Schema::create('program_builders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->tinyInteger('days');
            $table->tinyInteger('weeks');
            $table->unsignedBigInteger('created_by');
            $table->bigInteger('approved_by')->nullable()->default(0);
            $table->bigInteger('rejected_by')->nullable()->default(0);
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('program_builders');
    }
};
