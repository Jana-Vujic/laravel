<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategorija;

class KategorijaController extends Controller
{
    public function get()
    {
        $kategorije = Kategorija::all();

        return response()->json([
            'kategorije' => $kategorije,
        ]);
    }
    public function show($id)
    {
        $kategorija = Kategorija::find($id);
        $proizvodi = $kategorija->proizvodi;

        return view('kategorija', [
            'kategorija' => $kategorija,
            'proizvodi' => $proizvodi,
        ]);
    }
}
