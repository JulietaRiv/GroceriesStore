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
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('brand_id')->references('id')->on('brands');
            $table->string('name');
            $table->string('photo')->nullable();
            $table->string('description', 2000);
            $table->text('presentations');
            $table->boolean('stock')->default(1);
            $table->boolean('offer')->nullable();
            $table->boolean('highlighted')->nullable();
            $table->boolean('for_celiacs')->nullable();
            $table->boolean('organic')->nullable();
            $table->boolean('agroecological')->nullable();
            $table->boolean('vegan')->nullable();
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
