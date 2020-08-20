<?php

use Illuminate\Database\Seeder;

class categories_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id'=>1, 'name' => 'Especias, salsas, sal y pimienta', 'slug_name' =>'especias-salsas-sal-y-pimienta'],
            ['id'=>2, 'name' => 'Aceites y acetos', 'slug_name' =>'aceites-y-acetos'],
            ['id'=>3, 'name' => 'Endulzantes', 'slug_name' =>'endulzantes'],
            ['id'=>4, 'name' => 'Kiosko', 'slug_name' =>'kiosko'],
            ['id'=>5, 'name' => 'Dulces y mermeladas', 'slug_name' =>'dulces-y-mermeladas'],
            ['id'=>6, 'name' => 'Miel', 'slug_name' =>'miel'],
            ['id'=>7, 'name' => 'Yerbas e infusiones', 'slug_name' =>'yerbas-e-infusiones'],
            ['id'=>8, 'name' => 'Frutos secos y granolas', 'slug_name' =>'frutos-secos-y-granolas'],
            ['id'=>9, 'name' => 'Legumbres, cereales y semillas', 'slug_name' =>'legumbres-cereales-y-semillas'],
            ['id'=>10, 'name' => 'Harinas', 'slug_name' =>'harinas'],
            ['id'=>11, 'name' => 'Galletas y tostadas', 'slug_name' =>'galletas-y-tostadas'],
            ['id'=>12, 'name' => 'Pastas secas', 'slug_name' =>'pastas-secas'],
            ['id'=>13, 'name' => 'Tomate triturado', 'slug_name' =>'tomate-triturado'],
            ['id'=>14, 'name' => 'Conservas y untables', 'slug_name' =>'conservas-y-untables'],
            ['id'=>15, 'name' => 'Hongos y algas', 'slug_name' =>'hongos-y-algas'],
            ['id'=>16, 'name' => 'Bebidas', 'slug_name' =>'bebidas'],
            ['id'=>17, 'name' => 'Caldos y deshidratados', 'slug_name' =>'caldos-y-deshidratados'],
        ]);
    }
}
