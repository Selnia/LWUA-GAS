<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisbursementVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disbursement_vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mode_of_payment')->nullable();
            $table->integer('number')->nullable();
            $table->string('dv_date')->nullable();
            $table->string('payee_office');
            $table->string('tin_employee_number');
            $table->string('os_bus_number')->nullable();
            $table->string('os_bus_date')->nullable();
            $table->string('address');
            $table->string('title');
            $table->string('explanation')->nullable();
            $table->string('amount')->nullable();
            $table->string('cash_available')->nullable();
            $table->string('printed_name_one');
            $table->string('position_one');
            $table->string('certified_date_one');
            $table->string('printed_name_two');
            $table->string('position_two');
            $table->string('certified_date_two');
            $table->string('printed_name_three');
            $table->string('position_three');
            $table->string('certified_date_three');
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
        Schema::dropIfExists('disbursement_vouchers');
    }
}
