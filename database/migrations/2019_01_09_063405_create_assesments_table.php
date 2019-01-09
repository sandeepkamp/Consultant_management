<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssesmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->date('pre_assmnt_plnd_date');
            $table->date('pre_assmt_actual_date');
            $table->string('pre_assmt_comment')->nullable();
            $table->date('final_assmt__plnd_date');
            $table->date('final_assmt_actual_date');
            $table->string('final_assmt_comment')->nullable();
            $table->timestamps();
            $table->softDeletes();


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
        Schema::dropIfExists('assesments');
    }
}
