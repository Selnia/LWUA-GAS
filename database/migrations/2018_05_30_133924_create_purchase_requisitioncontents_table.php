<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseRequisitioncontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_requisitioncontents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pr_id');
            $table->string('item_no', 20);
            $table->string('stock_no', 20);
            $table->integer('available_stock');
            $table->string('reorder_point', 20);
            $table->string('reorder_quantity', 20);
            $table->string('particulars', 50);
            $table->integer('quantity');
            $table->double('unit_cost');
            $table->double('estimated_cost');
            $table->double('total')->nullable();
            $table->string('a_item_no', 20);
            $table->integer('a_quantity');
            $table->string('a_classification', 30);
            $table->string('b_item_no', 20);
            $table->integer('b_quantity');
            $table->string('b_classification', 30);
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
        Schema::dropIfExists('purchase_requisitioncontents');
    }
}
