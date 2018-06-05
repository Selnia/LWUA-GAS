<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplier')->nullable();
            $table->string('address', 250);
            $table->string('invoice_number');
            $table->string('invoice_date')->nullable();
            $table->string('delivery_reciept_number');
            $table->string('delivery_reciept_date')->nullable();
            $table->string('po_number');
            $table->string('po_date')->nullable();
            $table->string('reason', 255)->nullable();
            $table->string('storekeeper');
            $table->string('plant_maint_officer');
            $table->string('supplier_representative');
            $table->integer('number');
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
        Schema::dropIfExists('materials');
    }
}
