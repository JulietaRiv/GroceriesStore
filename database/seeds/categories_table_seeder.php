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
            ['id'=>1, 'name' => 'Especias, salsas, sal y pimienta', 'active'=>1],
            ['id'=>2, 'name' => 'Aceites y acetos', 'active'=>1],
            ['id'=>3, 'name' => 'Endulzantes', 'active'=>1],
            ['id'=>4, 'name' => 'Kiosko', 'active'=>1],
            ['id'=>5, 'name' => 'Dulces y mermeladas', 'active'=>1],
            ['id'=>6, 'name' => 'Miel', 'active'=>1],
            ['id'=>7, 'name' => 'Yerbas e infusiones', 'active'=>1],
            ['id'=>8, 'name' => 'Frutos secos y granolas', 'active'=>1],
            ['id'=>9, 'name' => 'Legumbres, cereales y semillas', 'active'=>1],
            ['id'=>10, 'name' => 'Harinas', 'active'=>1],
            ['id'=>11, 'name' => 'Galletas y tostadas', 'active'=>1],
            ['id'=>12, 'name' => 'Pastas secas', 'active'=>1],
            ['id'=>13, 'name' => 'Tomate triturado', 'active'=>1],
            ['id'=>14, 'name' => 'Conservas y untables', 'active'=>1],
            ['id'=>15, 'name' => 'Hongos y algas', 'active'=>1],
            ['id'=>16, 'name' => 'Bebidas', 'active'=>1],
            ['id'=>17, 'name' => 'Caldos y deshidratados', 'active'=>1],
        ]);
    }
}
