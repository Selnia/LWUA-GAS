<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockcards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_number', 20)->nullable();
            $table->string('stock_number', 20)->nullable();
            $table->string('article', 50);
            $table->string('unit', 20);
            $table->string('location', 50);
            $table->string('reorder_point', 20);
            $table->string('reorder_quantity', 20);
            $table->string('description', 100); 
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
        Schema::dropIfExists('stockcards');
    }
}
