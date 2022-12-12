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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('phone')->nullable();
            $table->enum('user_type',['admin','coach','user'])->default('user');
            $table->tinyInteger('is_active')->default(1);
            $table->unsignedBigInteger('athletic_type')->nullable();
            $table->foreign('athletic_type')->references('id')->on('athletic_types')->onDelete('cascade');
            $table->string('height')->nullable();
            $table->integer('age')->nullable();
            $table->enum('gender',['male','female','other'])->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('change_password')->nullable();
            $table->tinyInteger('user_checkin')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
