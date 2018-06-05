<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBincardcontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bincardcontents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bincard_id');
            $table->string('reference', 20);
            $table->integer('received')->nullable();
            $table->integer('issued')->nullable();
            $table->integer('balance_on_hand');
            $table->integer('on_order')->nullable();
            $table->integer('available');
            $table->string('storekeeper')->nullable();
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
        Schema::dropIfExists('bincardcontents');
    }
}
