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
            ['id'=>1, 'name' => 'Lopez'],
            ['id'=>2, 'name' => 'Oreo'],
            ['id'=>3, 'name' => 'Taragui'],
            ['id'=>4, 'name' => 'Gatorade'],
            ['id'=>5, 'name' => 'El calchaqui'],
            ['id'=>6, 'name' => 'Patagonia'],
            ['id'=>7, 'name' => 'Malibu'],
        ]);
    }
}
