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
            $table->foreignId('category_id')->references('id')->on('categories');;
            $table->foreignId('brand_id')->references('id')->on('brands');;
            $table->string('name');
            $table->string('photo');
            $table->longText('description');
            $table->json('presentations', 1000);
            $table->decimal('price', 8, 2);
            $table->decimal('promo_price', 8, 2)->nullable();
            $table->boolean('offer')->default(0);
            $table->boolean('highlighted')->default(0);
            $table->boolean('stock')->default(1);
            $table->boolean('active')->default(1);
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
