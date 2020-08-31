<?php

use Illuminate\Database\Seeder;


class dummies_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "id" => 1, "category_id" => 18, "brand_id" => 1, "name" => "Aceite de Oliva", "photo" => "", "price" => 70, "promo_price" => 75, "description" => "Sin conservantes",
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0,
                "presentations" => json_encode([
                    [
                        "presentation" => "Botella de vidrio de 500ml",
                        "main" => "1",
                        "stock" => 3,
                        "price" => 70,
                        "promo_price" => 75,
                        "offer" => 0,
                        "highlighted" => 0
                    ], [
                        "presentation" => "Botella de vidrio de 1000ml",
                        "main" => "0",
                        "stock" => 2,
                        "price" => 100,
                        "promo_price" => 120,
                        "offer" => 0,
                        "highlighted" => 0
                    ]
                ] , JSON_UNESCAPED_UNICODE ) 
            ],

            [
                "id" => 2, "category_id" => 18, "brand_id" => 2, "name" => "Aceite de Oliva", "photo" => "", "price" => 130, "promo_price" => 135, "description" => "Córdoba",
                "presentations" => json_encode([
                    ["presentation" => "Botella de PET 500 cc", "main" => "1",  "stock" => 5, "price" => 200, "promo_price" => 220, "offer" => 1, "highlighted" => 0],
                    ["presentation" => "C/Romero Botella de Vidrio 250 cc", "main" => "0", "stock" => 1, "price" => 130, "promo_price" => 135, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 1, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 3, "category_id" => 8, "brand_id" => 5, "name" => "Mix nueces y pasas", "photo" => "", "price" => 50, "promo_price" => 55, "description" => "",
                "presentations" => json_encode([["presentation" => "100 gr", "main" => "1",   "stock" => 6, "price" => 50, "promo_price" => 55, "offer" => 1, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 4, "category_id" => 8, "brand_id" => 7, "name" => "Nuez pelada Cuchiyaco", "photo" => "", "price" => 70, "promo_price" => 79, "description" => "La Rioja",
                "presentations" => json_encode([["presentation" => "250 gr", "main" => "1",  "stock" => 3, "price" => 70, "promo_price" => 79, "offer" => 0, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 5, "category_id" => 4, "brand_id" => 2, "name" => "Barra de cereal", "photo" => "", "price" => 120, "promo_price" => 82, "description" => "28gr",
                "presentations" => json_encode([
                    ["presentation" => "Matcha, Arándanos y Algarroba", "main" => "1",  "stock" => 10, "price" => "120", "promo_price" => 82, "offer" => 0, "highlighted" => 0],
                    ["presentation" => "Cacao 100 %", "main" => "0", "stock" => 10, "price" => 90, "promo_price" => null, "offer" => 0, "highlighted" => 0]
                ], JSON_UNESCAPED_UNICODE),
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 6, "category_id" => 10, "brand_id" => 3, "name" => "Trigo integral", "photo" => "", "price" => 500, "promo_price" => null, "description" => "Molido fino",
                "presentations" => json_encode([["presentation" => "1kg", "main" => "1",   "stock" => 3, "price" => 500, "promo_price" => null, "offer" => 0, "highlighted" => 1]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 1, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 7, "category_id" => 18, "brand_id" => 1, "name" => "Aceite de Oliva", "photo" => "", "price" => 70, "promo_price" => 75, "description" => "Sin conservantes",
                "presentations" => json_encode([
                    ["presentation" => "Botella de vidrio de 500ml", "main" => "1",   "stock" => 3, "price" => 70, "promo_price" => 75, "offer" => 0, "highlighted" => 0],
                    ["presentation" => "Botella de vidrio de 1000ml", "main" => "0", "stock" => 2, "price" => 100, "promo_price" => 120, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 8, "category_id" => 18, "brand_id" => 2, "name" => "Aceite de Oliva", "photo" => "", "price" => 130, "promo_price" => 135, "description" => "Córdoba",
                "presentations" => json_encode([
                    ["presentation" => "Botella de PET 500 cc", "main" => "1",   "stock" => 5, "price" => 200, "promo_price" => 220, "offer" => 1, "highlighted" => 0],
                    ["presentation" => "C/Romero Botella de Vidrio 250 cc", "main" => "0", "stock" => 1, "price" => 130, "promo_price" => 135, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 1, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 9, "category_id" => 8, "brand_id" => 5, "name" => "Mix nueces y pasas", "photo" => "", "price" => 50, "promo_price" => 55, "description" => "",
                "presentations" => json_encode([["presentation" => "100 gr", "main" => "1",   "stock" => 6, "price" => 50, "promo_price" => 55, "offer" => 1, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 10, "category_id" => 8, "brand_id" => 7, "name" => "Nuez pelada Cuchiyaco", "photo" => "", "price" => 70, "promo_price" => 79, "description" => "La Rioja",
                "presentations" => json_encode([["presentation" => "250 gr", "main" => "1",   "stock" => 3, "price" => 70, "promo_price" => 79, "offer" => 0, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 11, "category_id" => 4, "brand_id" => 2, "name" => "Barra de cereal", "photo" => "", "price" => 120, "promo_price" => 82, "description" => "28gr",
                "presentations" => json_encode([
                    ["presentation" => "Matcha, Arándanos y Algarroba", "main" => "1",   "stock" => 10, "price" => "120", "promo_price" => 82, "offer" => 0, "highlighted" => 0],
                    ["presentation" => "Cacao 100 %", "main" => "0", "stock" => 10, "price" => 90, "promo_price" => null, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 12, "category_id" => 10, "brand_id" => 3, "name" => "Trigo integral", "photo" => "", "price" => 500, "promo_price" => null, "description" => "Molido fino",
                "presentations" => json_encode([["presentation" => "1kg", "main" => "1",   "stock" => 3, "price" => 500, "promo_price" => null, "offer" => 0, "highlighted" => 1]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 1, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 13, "category_id" => 18, "brand_id" => 1, "name" => "Aceite de Oliva", "photo" => "", "price" => 70, "promo_price" => 75, "description" => "Sin conservantes",
                "presentations" => json_encode([
                    ["presentation" => "Botella de vidrio de 500ml", "main" => "1",   "stock" => 3, "price" => 70, "promo_price" => 75, "offer" => 0, "highlighted" => 0],
                    ["presentation" => "Botella de vidrio de 1000ml", "main" => "0", "stock" => 2, "price" => 100, "promo_price" => 120, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 14, "category_id" => 18, "brand_id" => 2, "name" => "Aceite de Oliva", "photo" => "", "price" => 130, "promo_price" => 135, "description" => "Córdoba",
                "presentations" => json_encode([
                    ["presentation" => "Botella de PET 500 cc", "main" => "1",   "stock" => 5, "price" => 200, "promo_price" => 220, "offer" => 1, "highlighted" => 0],
                    ["presentation" => "C/Romero Botella de Vidrio 250 cc", "main" => "0", "stock" => 1, "price" => 130, "promo_price" => 135, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 1, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 15, "category_id" => 8, "brand_id" => 5, "name" => "Mix nueces y pasas", "photo" => "", "price" => 50, "promo_price" => 55, "description" => "",
                "presentations" => json_encode([["presentation" => "100 gr", "main" => "1",   "stock" => 6, "price" => 50, "promo_price" => 55, "offer" => 1, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 16, "category_id" => 8, "brand_id" => 7, "name" => "Nuez pelada Cuchiyaco", "photo" => "", "price" => 70, "promo_price" => 79, "description" => "La Rioja",
                "presentations" => json_encode([["presentation" => "250 gr", "main" => "1",   "stock" => 3, "price" => 70, "promo_price" => 79, "offer" => 0, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 17, "category_id" => 4, "brand_id" => 2, "name" => "Barra de cereal", "photo" => "", "price" => 120, "promo_price" => 82, "description" => "28gr",
                "presentations" => json_encode([
                    ["presentation" => "Matcha, Arándanos y Algarroba", "main" => "1",   "stock" => 10, "price" => "120", "promo_price" => 82, "offer" => 0, "highlighted" => 0],
                    ["presentation" => "Cacao 100 %", "main" => "0", "stock" => 10, "price" => 90, "promo_price" => null, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 18, "category_id" => 10, "brand_id" => 3, "name" => "Trigo integral", "photo" => "", "price" => 500, "promo_price" => null, "description" => "Molido fino",
                "presentations" => json_encode([["presentation" => "1kg", "main" => "1",   "stock" => 3, "price" => 500, "promo_price" => null, "offer" => 0, "highlighted" => 1]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 1, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 19, "category_id" => 18, "brand_id" => 1, "name" => "Aceite de Oliva", "photo" => "", "price" => 70, "promo_price" => 75, "description" => "Sin conservantes",
                "presentations" => json_encode([
                    ["presentation" => "Botella de vidrio de 500ml", "main" => "1",   "stock" => 3, "price" => 70, "promo_price" => 75, "offer" => 0, "highlighted" => 0],
                    ["presentation" => "Botella de vidrio de 1000ml", "main" => "0", "stock" => 2, "price" => 100, "promo_price" => 120, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 20, "category_id" => 18, "brand_id" => 2, "name" => "Aceite de Oliva", "photo" => "", "price" => 130, "promo_price" => 135, "description" => "Córdoba",
                "presentations" => json_encode([
                    ["presentation" => "Botella de PET 500 cc", "main" => "1",    "stock" => 5, "price" => 200, "promo_price" => 220, "offer" => 1, "highlighted" => 0],
                    ["presentation" => "C/Romero Botella de Vidrio 250 cc", "main" => "0", "stock" => 1, "price" => 130, "promo_price" => 135, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 1, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 21, "category_id" => 8, "brand_id" => 5, "name" => "Mix nueces y pasas", "photo" => "", "price" => 50, "promo_price" => 55, "description" => "",
                "presentations" => json_encode([["presentation" => "100 gr", "main" => "1", "stock" => 6, "price" => 50, "promo_price" => 55, "offer" => 1, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 22, "category_id" => 8, "brand_id" => 7, "name" => "Nuez pelada Cuchiyaco", "photo" => "", "price" => 70, "promo_price" => 79, "description" => "La Rioja",
                "presentations" => json_encode([["presentation" => "250 gr", "main" => "1", "stock" => 3, "price" => 70, "promo_price" => 79, "offer" => 0, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 23, "category_id" => 4, "brand_id" => 2, "name" => "Barra de cereal", "photo" => "", "price" => 120, "promo_price" => 82, "description" => "28gr",
                "presentations" => json_encode([
                    ["presentation" => "Matcha, Arándanos y Algarroba", "stock" => 10, "price" => "120", "promo_price" => 82, "offer" => 0, "highlighted" => 0],
                    ["presentation" => "Cacao 100 %", "main" => "1",    "stock" => 10, "price" => 90, "promo_price" => null, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 24, "category_id" => 10, "brand_id" => 3, "name" => "Trigo integral", "photo" => "", "price" => 500, "promo_price" => null, "description" => "Molido fino",
                "presentations" => json_encode([["presentation" => "1kg", "main" => "1",    "stock" => 3, "price" => 500, "promo_price" => null, "offer" => 0, "highlighted" => 1]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 1, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 25, "category_id" => 18, "brand_id" => 1, "name" => "Aceite de Oliva", "photo" => "", "price" => 70, "promo_price" => 75, "description" => "Sin conservantes",
                "presentations" => json_encode([
                    ["presentation" => "Botella de vidrio de 500ml", "main" => "1",    "stock" => 3, "price" => 70, "promo_price" => 75, "offer" => 0, "highlighted" => 0],
                    ["presentation" => "Botella de vidrio de 1000ml", "main" => "0", "stock" => 2, "price" => 100, "promo_price" => 120, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 26, "category_id" => 18, "brand_id" => 2, "name" => "Aceite de Oliva", "photo" => "", "price" => 130, "promo_price" => 135, "description" => "Córdoba",
                "presentations" => json_encode([
                    ["presentation" => "Botella de PET 500 cc", "main" => "1",    "stock" => 5, "price" => 200, "promo_price" => 220, "offer" => 1, "highlighted" => 0],
                    ["presentation" => "C/Romero Botella de Vidrio 250 cc", "main" => "0", "stock" => 1, "price" => 130, "promo_price" => 135, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 1, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 27, "category_id" => 8, "brand_id" => 5, "name" => "Mix nueces y pasas", "photo" => "", "price" => 50, "promo_price" => 55, "description" => "",
                "presentations" => json_encode([["presentation" => "100 gr", "main" => "1",    "stock" => 6, "price" => 50, "promo_price" => 55, "offer" => 1, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 28, "category_id" => 8, "brand_id" => 7, "name" => "Nuez pelada Cuchiyaco", "photo" => "", "price" => 70, "promo_price" => 79, "description" => "La Rioja",
                "presentations" => json_encode([["presentation" => "250 gr", "main" => "1",    "stock" => 3, "price" => 70, "promo_price" => 79, "offer" => 0, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 29, "category_id" => 4, "brand_id" => 2, "name" => "Barra de cereal", "photo" => "", "price" => 120, "promo_price" => 82, "description" => "28gr",
                "presentations" => json_encode([
                    ["presentation" => "Matcha, Arándanos y Algarroba", "main" => "1",    "stock" => 10, "price" => "120", "promo_price" => 82, "offer" => 0, "highlighted" => 0],
                    ["presentation" => "Cacao 100 %", "main" => "0", "stock" => 10, "price" => 90, "promo_price" => null, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 30, "category_id" => 10, "brand_id" => 3, "name" => "Trigo integral", "photo" => "", "price" => 500, "promo_price" => null, "description" => "Molido fino",
                "presentations" => json_encode([["presentation" => "1kg", "main" => "1",    "stock" => 3, "price" => 500, "promo_price" => null, "offer" => 0, "highlighted" => 1]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 1, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 31, "category_id" => 18, "brand_id" => 1, "name" => "Aceite de Oliva", "photo" => "", "price" => 70, "promo_price" => 75, "description" => "Sin conservantes",
                "presentations" => json_encode([
                    ["presentation" => "Botella de vidrio de 500ml", "main" => "1",   "stock" => 3, "price" => 70, "promo_price" => 75, "offer" => 0, "highlighted" => 0],
                    ["presentation" => "Botella de vidrio de 1000ml", "main" => "0", "stock" => 2, "price" => 100, "promo_price" => 120, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 32, "category_id" => 18, "brand_id" => 2, "name" => "Aceite de Oliva", "photo" => "", "price" => 130, "promo_price" => 135, "description" => "Córdoba",
                "presentations" => json_encode([
                    ["presentation" => "Botella de PET 500 cc", "main" => "1",   "stock" => 5, "price" => 200, "promo_price" => 220, "offer" => 1, "highlighted" => 0],
                    ["presentation" => "C/Romero Botella de Vidrio 250 cc", "main" => "0", "stock" => 1, "price" => 130, "promo_price" => 135, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 1, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 33, "category_id" => 8, "brand_id" => 5, "name" => "Mix nueces y pasas", "photo" => "", "price" => 50, "promo_price" => 55, "description" => "",
                "presentations" => json_encode([["presentation" => "100 gr", "main" => "1",   "stock" => 6, "price" => 50, "promo_price" => 55, "offer" => 1, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 34, "category_id" => 8, "brand_id" => 7, "name" => "Nuez pelada Cuchiyaco", "photo" => "", "price" => 70, "promo_price" => 79, "description" => "La Rioja",
                "presentations" => json_encode([["presentation" => "250 gr", "main" => "1",   "stock" => 3, "price" => 70, "promo_price" => 79, "offer" => 0, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 35, "category_id" => 4, "brand_id" => 2, "name" => "Barra de cereal", "photo" => "", "price" => 120, "promo_price" => 82, "description" => "28gr",
                "presentations" => json_encode([
                    ["presentation" => "Matcha, Arándanos y Algarroba", "main" => "1",   "stock" => 10, "price" => "120", "promo_price" => 82, "offer" => 0, "highlighted" => 0],
                    ["presentation" => "Cacao 100 %", "main" => "0", "stock" => 10, "price" => 90, "promo_price" => null, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 36, "category_id" => 10, "brand_id" => 3, "name" => "Trigo integral", "photo" => "", "price" => 500, "promo_price" => null, "description" => "Molido fino",
                "presentations" => json_encode([["presentation" => "1kg", "main" => "1",   "stock" => 3, "price" => 500, "promo_price" => null, "offer" => 0, "highlighted" => 1]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 1, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 37, "category_id" => 18, "brand_id" => 1, "name" => "Aceite de Oliva", "photo" => "", "price" => 70, "promo_price" => 75, "description" => "Sin conservantes",
                "presentations" => json_encode([
                    ["presentation" => "Botella de vidrio de 500ml", "main" => "1",   "stock" => 3, "price" => 70, "promo_price" => 75, "offer" => 0, "highlighted" => 0],
                    ["presentation" => "Botella de vidrio de 1000ml", "main" => "0", "stock" => 2, "price" => 100, "promo_price" => 120, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 1, "agroecological" => 0, "vegan" => 0
            ],

            [
                "id" => 38, "category_id" => 18, "brand_id" => 2, "name" => "Aceite de Oliva", "photo" => "", "price" => 130, "promo_price" => 135, "description" => "Córdoba",
                "presentations" => json_encode([
                    ["presentation" => "Botella de PET 500 cc", "main" => "1",   "stock" => 5, "price" => 200, "promo_price" => 220, "offer" => 1, "highlighted" => 0],
                    ["presentation" => "C/Romero Botella de Vidrio 250 cc", "main" => "0", "stock" => 1, "price" => 130, "promo_price" => 135, "offer" => 0, "highlighted" => 0]
                ] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 1, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 39, "category_id" => 8, "brand_id" => 5, "name" => "Mix nueces y pasas", "photo" => "", "price" => 50, "promo_price" => 55, "description" => "",
                "presentations" => json_encode([["presentation" => "100 gr", "main" => "1",   "stock" => 6, "price" => 50, "promo_price" => 55, "offer" => 1, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],

            [
                "id" => 40, "category_id" => 8, "brand_id" => 7, "name" => "Nuez pelada Cuchiyaco", "photo" => "", "price" => 70, "promo_price" => 79, "description" => "La Rioja",
                "presentations" => json_encode([["presentation" => "250 gr", "main" => "1",   "stock" => 3, "price" => 70, "promo_price" => 79, "offer" => 0, "highlighted" => 0]] , JSON_UNESCAPED_UNICODE ) ,
                "stock" => 1, "offer" => 0, "highlighted" => 0, "celiacs" => 0, "organic" => 0, "agroecological" => 1, "vegan" => 0
            ],


            /*["id"=>, "category_id"=>, "brand_id"=>, "name"=>"", "photo"=>"", "description"=>"", 
            "presentations"=>'[["presentation"=>"", "stock"=>, "price"=>, "promo_price"=>, "offer"=>, "highlighted"=>], 
                ["presentation"=>"", "stock"=>, "price"=>, "promo_price"=>, "offer"=>, "highlighted"=>]] , JSON_UNESCAPED_UNICODE ) ,  
                    "stock"=>1, "offer"=>0, "highlighted"=>0, "celiacs"=>0, "organic"=>0, "agroecological"=>0, "vegan"=>0],*/
        ];
        foreach ($data as $i => $d) {
            $data[$i]["slug_name"] = Str::of($d["name"])->slug("-") . "-" . $d["id"];
            $data[$i]["created_at"] = new DateTime();
        }
        DB::table("products")->insert($data);
    }
}
