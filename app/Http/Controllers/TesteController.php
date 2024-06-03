<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        return view('site.teste', compact('p1', 'p2'));  //COMPACT
    }
}
