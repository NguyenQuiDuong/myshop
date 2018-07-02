<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string("barcode");
            $table->string("name");
            $table->text("description")->nullable();
            $table->integer("category_id")->nullable()->unsigned();
            $table->foreign('category_id')->references('id')->on('product_categories');
            $table->integer("import_price");
            $table->integer("retail_price");
            $table->integer("trade_price");
            $table->integer('quantity');
            $table->integer('unit');
            $table->integer("product_import_id")->nullable()->unsigned();
            $table->foreign('product_import_id')->references('id')->on('product_imports');
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
        Schema::dropIfExists('products');
    }
}
