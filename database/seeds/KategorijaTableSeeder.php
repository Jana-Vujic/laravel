<?php

use Illuminate\Database\Seeder;
use App\Kategorija;

class KategorijaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategorija::insert([
            'naziv_kategorije' => 'Alati'
        ]);
        Kategorija::insert([
            'naziv_kategorije' => 'Farbe'
        ]);
        Kategorija::insert([
            'naziv_kategorije' => 'Stiropor'
        ]);
        Kategorija::insert([
            'naziv_kategorije' => 'Lakovi'
        ]);
        Kategorija::insert([
            'naziv_kategorije' => 'Četke'
        ]);
    }
}
