<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseRequisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_requisitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pr_no', 20)->nullable();
            $table->string('to', 50);
            $table->string('charge_to', 50);
            $table->string('options', 50);
            $table->string('needs_budget', 50)->nullable();
            $table->string('needs_item', 50)->nullable();
            $table->string('justification', 50);
            $table->string('end_user', 20);
            $table->string('to_be_carried', 20)->nullable();
            $table->string('on_case_to', 20)->nullable();
            $table->string('job_work_order_no', 20);
            $table->string('requisitioned_name', 50);
            $table->string('requisitioned_position', 50);  
            $table->string('supervisor', 50);
            $table->string('finance', 50);
            $table->string('general_manager', 50);
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
        Schema::dropIfExists('purchase_requisitions');
    }
}
