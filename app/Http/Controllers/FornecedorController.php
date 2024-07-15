<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = DB::table('fornecedores')->get();
        return view('app.fornecedores', compact('fornecedores'));
    }
}
