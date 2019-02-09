<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderEditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_edit', function (Blueprint $table) {

            $table->increments('id');

            $table->string('client_email');
            $table->string('partner_name');
            $table->string('products');
            $table->integer('order_status');
            $table->integer('order_cost');
            $table->boolean('order_save_status');

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
        Schema::dropIfExists('order_edits');
    }
}
