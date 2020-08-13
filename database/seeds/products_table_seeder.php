<?php

use Illuminate\Database\Seeder;

class products_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['id'=>1, 'name' => '', 'category_id'=>1, 'brand_id'=>3, 'description'=>'', 'presentations'=>'[]', 'price'=>1, 'promo_price'=>2, 'stock'=>1, 'offer'=>1, 'highlighted'=>0, 'for_celiacs'=>1, 'organic'=>1, 'agroecological'=>1],
            ['id'=>2, 'name' => '', 'category_id'=>2, 'brand_id'=>5, 'description'=>'', 'presentations'=>'[]', 'price'=>1, 'promo_price'=>2, 'stock'=>1, 'offer'=>1, 'highlighted'=>0, 'for_celiacs'=>0, 'organic'=>1, 'agroecological'=>1],
            ['id'=>3, 'name' => '', 'category_id'=>3, 'brand_id'=>2, 'description'=>'', 'presentations'=>'[]', 'price'=>1, 'promo_price'=>2, 'stock'=>1, 'offer'=>1, 'highlighted'=>0, 'for_celiacs'=>0, 'organic'=>1, 'agroecological'=>1],
            ['id'=>4, 'name' => '', 'category_id'=>4, 'brand_id'=>7, 'description'=>'', 'presentations'=>'[]', 'price'=>1, 'promo_price'=>2, 'stock'=>1, 'offer'=>0, 'highlighted'=>1, 'for_celiacs'=>0, 'organic'=>1, 'agroecological'=>1],
            ['id'=>5, 'name' => '', 'category_id'=>5, 'brand_id'=>6, 'description'=>'', 'presentations'=>'[]', 'price'=>1, 'promo_price'=>2, 'stock'=>1, 'offer'=>0, 'highlighted'=>1, 'for_celiacs'=>0, 'organic'=>1, 'agroecological'=>1],
            ['id'=>6, 'name' => '', 'category_id'=>1, 'brand_id'=>4, 'description'=>'', 'presentations'=>'[]', 'price'=>1, 'promo_price'=>2, 'stock'=>1, 'offer'=>0, 'highlighted'=>1, 'for_celiacs'=>0, 'organic'=>1, 'agroecological'=>1],
            ['id'=>7, 'name' => '', 'category_id'=>1, 'brand_id'=>5, 'description'=>'', 'presentations'=>'[]', 'price'=>1, 'promo_price'=>2, 'stock'=>1, 'offer'=>0, 'highlighted'=>0, 'for_celiacs'=>1, 'organic'=>0, 'agroecological'=>0],
            ['id'=>8, 'name' => '', 'category_id'=>1, 'brand_id'=>3, 'description'=>'', 'presentations'=>'[]', 'price'=>1, 'promo_price'=>2, 'stock'=>1, 'offer'=>0, 'highlighted'=>0, 'for_celiacs'=>1, 'organic'=>0, 'agroecological'=>0],
            ['id'=>9, 'name' => '', 'category_id'=>1, 'brand_id'=>2, 'description'=>'', 'presentations'=>'[]', 'price'=>1, 'promo_price'=>2, 'stock'=>1, 'offer'=>0, 'highlighted'=>0, 'for_celiacs'=>1, 'organic'=>0, 'agroecological'=>0],
            ['id'=>10, 'name' => '', 'category_id'=>1, 'brand_id'=>1, 'description'=>'', 'presentations'=>'[]', 'price'=>1, 'promo_price'=>2, 'stock'=>1, 'offer'=>0, 'highlighted'=>0, 'for_celiacs'=>1, 'organic'=>0, 'agroecological'=>0]
        ]);
    }
}
