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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('category_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->double('amount', 10, 2);
            $table->string('status')->default('started_payment'); //started payment, returned from payment platform
            $table->string('mode_of_payment')->nullable(); //card, cash, online transfer...
            $table->string('payment_processor')->nullable(); //paypal, stripe...
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
        Schema::dropIfExists('payments');
    }
};
