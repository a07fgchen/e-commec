<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });

        if (Schema::hasTable('products')) {
            Schema::table('products', function (Blueprint $table) {
                $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
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
        Schema::table('products',function(Blueprint $table){
            $table->dropForeign(['category_id']);
        });
        Schema::dropIfExists('categories');
    }
}
