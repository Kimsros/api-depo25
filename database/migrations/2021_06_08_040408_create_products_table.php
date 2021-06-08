<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->bigInteger('shop_id');
            $table->bigInteger('product_brand_id');
            $table->bigInteger('category_id');
            $table->bigInteger('product_video_id');
            $table->bigInteger('unit_id');
            $table->boolean('refundable')->default(0);
            $table->boolean('publish')->default(0);
            $table->bigInteger('low_stock_qty_warning');
            $table->boolean('status')->default(1);
            $table->bigInteger('updated_by');
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
