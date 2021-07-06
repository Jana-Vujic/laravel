<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PocetnaController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function kategorije()
    {
        return view('kategorije');
    }
    public function proizvodi()
    {
        return view('proizvodi');
    }
}
