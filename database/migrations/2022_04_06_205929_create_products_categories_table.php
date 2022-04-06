<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_categories', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('categories_id')->nullable();
            $table->unsignedBigInteger('products_id')->nullable();
        });

        if (Schema::hasTable('products')) {
            Schema::table('products_categories', function (Blueprint $table) {
                $table->primary(['categories_id', 'products_id']);
                $table->foreign('products_id')
                    ->references('id')
                    ->on('products_id')
                    ->onUpdate('cascade')
                    ->onDelete('set null')
                    ->change();
            });
        }
        if (Schema::hasTable('categories')) {
            Schema::table('products_categories', function (Blueprint $table) {
                $table->foreign('categories_id')
                    ->references('id')
                    ->on('categories_id')
                    ->onUpdate('cascade')
                    ->onDelete('set null')
                    ->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_categories');
    }
}
