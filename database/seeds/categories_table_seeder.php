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
            ['id'=>1, 'name' => 'Especias, salsas, sal y pimienta'],
            ['id'=>2, 'name' => 'Aceites y acetos'],
            ['id'=>3, 'name' => 'Endulzantes'],
            ['id'=>4, 'name' => 'Kiosko'],
            ['id'=>5, 'name' => 'Dulces y mermeladas'],
            ['id'=>6, 'name' => 'Miel'],
            ['id'=>7, 'name' => 'Yerbas e infusiones'],
            ['id'=>8, 'name' => 'Frutos secos y granolas'],
            ['id'=>9, 'name' => 'Legumbres, cereales y semillas'],
            ['id'=>10, 'name' => 'Harinas'],
            ['id'=>11, 'name' => 'Galletas y tostadas'],
            ['id'=>12, 'name' => 'Pastas secas'],
            ['id'=>13, 'name' => 'Tomate triturado'],
            ['id'=>14, 'name' => 'Conservas y untables'],
            ['id'=>15, 'name' => 'Hongos y algas'],
            ['id'=>16, 'name' => 'Bebidas'],
            ['id'=>17, 'name' => 'Caldos y deshidratados'],
        ]);
    }
}
