<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->date('int_audit_plnd_date');
            $table->date('int_audit_actual_date');
            $table->string('int_audit_comment')->nullable();
            $table->date('adequacy_audit_plnd_date');
            $table->date('adequacy_audit_actual_date');
            $table->string('adequacy_audit_comment')->nullable();
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
        Schema::dropIfExists('audits');
    }
}
