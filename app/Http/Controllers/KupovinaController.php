<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kupovina;
use App\Proizvod;
use Carbon\Carbon;

class KupovinaController extends Controller
{
    public function store(Request $request)
    {
        $ime_prezime_kupca = $request->input('ime_prezime_kupca');
        $kolicina = $request->input('kolicina');
        $kupljeno = Carbon::now();
        $proizvod_id = $request->input('proizvod_id');
        $ukupno = $request->input('ukupno');

        if ($proizvod_id) {
            $proizvod = Proizvod::find($proizvod_id);

            if ($proizvod->smanji_zalihe($kolicina)) {
                Kupovina::insert([
                    'ime_prezime_kupca' => $ime_prezime_kupca,
                    'kolicina' => $kolicina,
                    'kupljeno' => $kupljeno,
                    'proizvod_id' => $proizvod_id,
                    'ukupno' => $ukupno
                ]);
                return response()->json([
                    'message' => "Uspešno ste obavili kupovinu!"
                ]);
            } else return response()->json([
                'message' => "Nema dovoljno proizvoda na zalihama!"
            ]);
        } 
    }
}
