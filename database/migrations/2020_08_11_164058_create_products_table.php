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
            $table->decimal('price', 8, 2);
            $table->boolean('stock')->default(1);
            $table->boolean('offer')->default(0);
            $table->boolean('highlighted')->default(0);
            $table->boolean('for_celiacs')->default(0);
            $table->boolean('organic')->default(0);
            $table->boolean('agroecological')->default(0);
            $table->boolean('vegan')->default(0);
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
