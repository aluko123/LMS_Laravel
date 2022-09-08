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
        Schema::create('course_user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('course_id');
            $table->integer('user_account_id');
            $table->dateTime('paid_date');
            $table->dateTime('expiry_date');
            $table->string('plan')->nullable(); //monthly, quarterly, lifetime
            $table->double('paid_amount')->nullable();
            $table->tinyInteger('status')->default(0); //0: off, 1: on
            $table->softDeletes();
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
        Schema::dropIfExists('course_user');
    }
};
