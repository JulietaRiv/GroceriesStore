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
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('name');
            $table->string('photo');
            $table->string('description');
            $table->string('presentations', 1000);
            $table->decimal('price');
            $table->decimal('promo_price')->nullable();
            $table->boolean('offer');
            $table->boolean('highlighted');
            $table->boolean('stock');
            $table->boolean('active');
            $table->timestamps();
        });
    }
//claves foraneas
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
