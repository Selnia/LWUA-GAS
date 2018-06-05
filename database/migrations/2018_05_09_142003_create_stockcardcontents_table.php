<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockcardcontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockcardcontents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stockcard_id');
            $table->string('reference', 20);
            $table->integer('received_quantity')->nullable();
            $table->decimal('received_unit_cost', 8,2)->nullable();
            $table->decimal('received_amount', 8,2)->nullable();
            $table->integer('issued_quantity')->nullable();
            $table->decimal('issued_unit_cost', 8,2)->nullable();
            $table->decimal('issued_amount', 8,2)->nullable();
            $table->integer('balance_quantity');
            $table->decimal('balance_unit_cost', 8,2);
            $table->decimal('balance_amount', 8,2);
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
        Schema::dropIfExists('stockcardcontents');
    }
}
