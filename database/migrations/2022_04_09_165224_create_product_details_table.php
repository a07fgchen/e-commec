<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('sku');
            $table->char('color', 10);
            $table->char('size', 10);
            $table->unsignedBigInteger('quantity')->default(0);
            $table->unsignedBigInteger('price')->default(0);
            $table->timestamps();
        });
        Schema::table('product_details', function (Blueprint $table) {
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['product_detail_id']);
        });
        Schema::dropIfExists('product_details');
    }
}