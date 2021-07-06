<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proizvod;

class ProizvodController extends Controller
{
    public function get()
    {

        $proizvodi = Proizvod::with('kategorija')->get();

        return response()->json([
            'proizvodi' => $proizvodi
        ]);
    }

    public function show($proizvod_id)
    {
        $proizvod = Proizvod::find($proizvod_id);
        $kategorija = $proizvod->kategorija;
        $kupovine = $proizvod->kupovine;

        return view('proizvod', [
            'proizvod' => $proizvod,
            'kupovine' => $kupovine,
            'kategorija' => $kategorija,
        ]);
    }

    public function destroy($proizvod_id)
    {
        $proizvod = Proizvod::find($proizvod_id);
        $proizvod->delete();
    }
}
