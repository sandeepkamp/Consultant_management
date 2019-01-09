<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStartPlndDtToProcessManagements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('process_managements', function (Blueprint $table) {
            $table->date('start_plnd_dt')->after('project_lead');
            $table->date('start_actual_dt')->after('start_plnd_dt');;
            $table->date('gap_assessment')->after('start_actual_dt');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('process_managements', function (Blueprint $table) {
            //
        });
    }
}
