<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->id('id')->primary()->unique()->autoIncrement();
            $table->uuid('id_transaksi')->nullable(false);
            $table->uuid('product_id')->nullable(false);
            $table->integer('jumlah_items');
            $table->timestamps();
            $table->foreign('transaction_id')
            ->references('id_transaksi')->on('transaction')->onDelete('cascade');
            $table->foreign('product_id')
            ->references('id')->on('products')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_detail');
    }
}
