<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->date('adv_plnd_dt');
            $table->date('adv_act_dt');
            $table->string('adv_remark');
            $table->date('first_instal_plnd_dt');
            $table->date('first_instal_act_dt');
            $table->string('first_instal_remark');
            $table->date('sec_instal_pl_dt');
            $table->date('sec_instal_act_dt');
            $table->string('sec_instal_remark');
            $table->date('third_instal_pl_dt');
            $table->date('third_instal_act_dt');
            $table->string('third_instal_remark');
            $table->date('final_pay_pl_dt');
            $table->date('final_pay_act_dt');
            $table->string('final_pay_remark');
            $table->timestamps();



            $table->foreign('order_id')->references('id')->on('process_managements');
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
}
