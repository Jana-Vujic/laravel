<?php

use Illuminate\Database\Seeder;
use App\Proizvod;

class ProizvodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proizvod::insert([
            'naziv_proizvoda' => 'Bela boja 15l',
            'cena' => 2698.5,
            'zalihe' => 6,
            'kategorija_id' => 2
        ]);
        Proizvod::insert([
            'naziv_proizvoda' => 'Plava boja 10l',
            'cena' => 1699,
            'zalihe' => 10,
            'kategorija_id' => 2
        ]);
        Proizvod::insert([
            'naziv_proizvoda' => 'Crvena boja 5l',
            'cena' => 1256.4,
            'zalihe' => 16,
            'kategorija_id' => 2
        ]);
        Proizvod::insert([
            'naziv_proizvoda' => 'Stiropor 8mm',
            'cena' => 150,
            'zalihe' => 200,
            'kategorija_id' => 3
        ]);
        Proizvod::insert([
            'naziv_proizvoda' => 'Stiropor 6mm',
            'cena' => 120,
            'zalihe' => 321,
            'kategorija_id' => 3
        ]);
        Proizvod::insert([
            'naziv_proizvoda' => 'Stiropor 15mm',
            'cena' => 230,
            'zalihe' => 20,
            'kategorija_id' => 3
        ]);
        Proizvod::insert([
            'naziv_proizvoda' => 'Šmirgla',
            'cena' => 144,
            'zalihe' => 11,
            'kategorija_id' => 1
        ]);
        Proizvod::insert([
            'naziv_proizvoda' => 'Mala četka',
            'cena' => 50,
            'zalihe' => 19,
            'kategorija_id' => 5
        ]);
        Proizvod::insert([
            'naziv_proizvoda' => 'Velika četka',
            'cena' => 200,
            'zalihe' => 5,
            'kategorija_id' => 5
        ]);
        Proizvod::insert([
            'naziv_proizvoda' => 'Lak za drvo',
            'cena' => 985,
            'zalihe' => 20,
            'kategorija_id' => 4
        ]);
    }
}
