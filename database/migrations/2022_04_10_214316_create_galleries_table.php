<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_detail_id');
            $table->string('image');

            $table->foreign('product_detail_id')
                ->references('id')
                ->on('product_details');
        });

        if (Schema::hasTable('products')) {
            Schema::table('products', function (Blueprint $table) {
                $table->foreignId('gallery_id')
                    ->nullable()
                    ->constrained()
                    ->cascadeOnUpdate()
                    ->onDelete('set null');
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
            $table->dropForeign(['gallery_id']);
        });
        
        Schema::dropIfExists('galleries');
    }
}
