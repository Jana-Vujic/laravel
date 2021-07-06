<?php

use Illuminate\Database\Seeder;
use App\Kupovina;
use App\Proizvod;
use Carbon\Carbon;

class KupovinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pr = Proizvod::find(1);
        $kol = 3;
        if($pr->smanji_zalihe($kol)) {
            Kupovina::insert([
                'ime_prezime_kupca' => 'Jana Vujić',
                'kolicina' => $kol,
                'proizvod_id' => $pr->id,
                'ukupno' => $kol * $pr->cena
            ]);
        }

        $pr = Proizvod::find(2);
        $kol = 4;
        if($pr->smanji_zalihe($kol)) {
            Kupovina::insert([
                'ime_prezime_kupca' => 'Gordana Vujić',
                'kolicina' => $kol,
                'proizvod_id' => $pr->id,
                'ukupno' => $kol * $pr->cena
            ]);
        }

        $pr = Proizvod::find(7);
        $kol = 9;
        if($pr->smanji_zalihe($kol)) {
            Kupovina::insert([
                'ime_prezime_kupca' => 'Petar Atlagić',
                'kolicina' => $kol,
                'proizvod_id' => $pr->id,
                'ukupno' => $kol * $pr->cena
            ]);
        }
    }
}
