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
        $data = [
            ["id"=>1, "category_id"=>18, "brand_id"=>1, "name"=>"Aceite de Oliva", "photo"=>"", "price"=>70, "promo_price"=>75, "description"=>"Sin conservantes", 
                "presentations"=>'[{"presentation":"Botella de vidrio de 500ml", "stock":3, "price":70, "promo_price":75, "offer":0, "highlighted":0}, 
                    {"presentation":"Botella de vidrio de 1000ml", "stock":2, "price":100, "promo_price":120, "offer":0, "highlighted":0}]', 
                        "main_presentation"=>"", "stock"=>1, "offer"=>0, "highlighted"=>0, "celiacs"=>0, "organic"=>1, "agroecological"=>0, "vegan"=>0],

            ["id"=>2, "category_id"=>18, "brand_id"=>2, "name"=>"Aceite de Oliva", "photo"=>"", "price"=>130, "promo_price"=>135, "description"=>"Córdoba", 
                "presentations"=>'[{"presentation":"Botella de PET 500 cc", "stock":5, "price":200, "promo_price":220, "offer":1, "highlighted":0}, 
                    {"presentation":"C/Romero Botella de Vidrio 250 cc", "stock":1, "price":130, "promo_price":135, "offer":0, "highlighted":0}]', 
                    "main_presentation"=>"", "stock"=>1, "offer"=>1, "highlighted"=>0, "celiacs"=>0, "organic"=>0, "agroecological"=>1, "vegan"=>0],

            ["id"=>3, "category_id"=>8, "brand_id"=>5, "name"=>"Mix nueces y pasas", "photo"=>"", "price"=>50, "promo_price"=>55, "description"=>"", 
                "presentations"=>'[{"presentation":"100 gr", "stock":6, "price":50, "promo_price":55, "offer":1, "highlighted":0}]', 
                    "main_presentation"=>"", "stock"=>1, "offer"=>0, "highlighted"=>0, "celiacs"=>0, "organic"=>0, "agroecological"=>1, "vegan"=>0],

            ["id"=>4, "category_id"=>8, "brand_id"=>7, "name"=>"Nuez pelada Cuchiyaco", "photo"=>"", "price"=>70, "promo_price"=>79, "description"=>"La Rioja", 
                "presentations"=>'[{"presentation":"250 gr", "stock":3, "price":70, "promo_price":79, "offer":0, "highlighted":0}]', 
                    "main_presentation"=>"", "stock"=>1, "offer"=>0, "highlighted"=>0, "celiacs"=>0, "organic"=>0, "agroecological"=>1, "vegan"=>0],

            ["id"=>5, "category_id"=>4, "brand_id"=>2, "name"=>"Barra de cereal", "photo"=>"", "price"=>120, "promo_price"=>82, "description"=>"28gr", 
                "presentations"=>'[{"presentation":"Matcha, Arándanos y Algarroba", "stock":10, "price":"120", "promo_price":82, "offer":0, "highlighted":0}, 
                {"presentation":"Cacao 100 %", "stock":10, "price":90, "promo_price":null, "offer":0, "highlighted":0}]', 
                    "main_presentation"=>"", "stock"=>1, "offer"=>0, "highlighted"=>0, "celiacs"=>0, "organic"=>0, "agroecological"=>0, "vegan"=>0],

            ["id"=>6, "category_id"=>10, "brand_id"=>3, "name"=>"Trigo integral", "photo"=>"", "price"=>500, "promo_price"=>null, "description"=>"Molido fino", 
                "presentations"=>'[{"presentation":"1kg", "stock":3, "price":500, "promo_price":null, "offer":0, "highlighted":1}]', 
                    "main_presentation"=>"", "stock"=>1, "offer"=>0, "highlighted"=>1, "celiacs"=>0, "organic"=>1, "agroecological"=>0, "vegan"=>0]
                
            /*["id"=>, "category_id"=>, "brand_id"=>, "name"=>"", "photo"=>"", "description"=>"", 
            "presentations"=>'[{"presentation":"", "stock":, "price":, "promo_price":, "offer":, "highlighted":}, 
                {"presentation":"", "stock":, "price":, "promo_price":, "offer":, "highlighted":}]', 
                    "stock"=>1, "offer"=>0, "highlighted"=>0, "celiacs"=>0, "organic"=>0, "agroecological"=>0, "vegan"=>0],*/
        ];
        foreach ($data as $i=>$d){
            $data[$i]["slug_name"] = Str::of($d["name"])->slug("-")."-".$d["id"];
            $data[$i]["created_at"] = new DateTime();
        }
        DB::table("products")->insert($data);
    }
}
