<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouchNGoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('touch_n_go', function (Blueprint $table) {
            $table->id();
            $table->integer('transaction_id');
            $table->text('order_title');
            $table->double('amount');
            $table->string('return_url');
            $table->integer('status');
            $table->string('acquirement_id');
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
        Schema::dropIfExists('touch_n_go');
    }
}