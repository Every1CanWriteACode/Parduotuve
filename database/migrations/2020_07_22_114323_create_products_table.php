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
            
            // $table->unsignedBigInteger('image_id');
            $table->string('title',50);
            $table->decimal('price')->default(0);;
            $table->integer('sale')->default(0);
            // $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            // $table->text('description');
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
