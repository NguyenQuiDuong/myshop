<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductStatusLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_status_logs', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->json('sold_record');// This column will contain datetime and quantity of products are sold;
            $table->integer('unit');
            $table->integer('sales_person_id')->unsigned();
            $table->foreign('sales_person_id')->references('id')->on('users');
            $table->date('date_sold');
            $table->index(['product_id','sales_person_id','date_sold']);
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
        Schema::dropIfExists('product_status_logs');
    }
}
