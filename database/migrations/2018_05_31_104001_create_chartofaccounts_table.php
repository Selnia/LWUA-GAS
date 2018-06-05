<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartofaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chartofaccounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cps_original_account_number', 20)->nullable();
            $table->string('cps_ngas_modified_chart_of_accounts',15)->nullable();
            $table->string('account_group', 6)->nullable();
            $table->string('major_account_group', 6)->nullable();
            $table->string('sub_major_account_group', 6)->nullable();
            $table->string('gl_account', 6)->nullable();
            $table->string('gl_contra_account', 6)->nullable();
            $table->string('subsidiary_ledger_account', 8)->nullable();
            $table->string('account_name', 150);
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
        Schema::dropIfExists('chartofaccounts');
    }
}
