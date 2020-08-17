<?php

use Illuminate\Database\Seeder;

class brands_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['id'=>1, 'name' => 'La Riojana'],
            ['id'=>2, 'name' => 'Fincas del Cruz del Eje'],
            ['id'=>3, 'name' => 'Cuchiyaco'],
            ['id'=>4, 'name' => 'Pulpa de Nuez'],
            ['id'=>5, 'name' => 'Planta Abierta'],
            ['id'=>6, 'name' => 'La Huerta Familiar'],
            ['id'=>7, 'name' => 'Fincas "El Paraíso"'],
        ]);
    }
}
