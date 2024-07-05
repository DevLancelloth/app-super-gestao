<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome'      => 'Fornecedor 1',
                'status'    => 'N',
                'cnpj'      => '0',
                'ddd'       => '0', // São Paulo (SP)
                'telefone'  => '1111111111'
            ],
            1 => [
                'nome'      => 'Fornecedor 2',
                'status'    => 'S',
                'cnpj'      => null,
                'ddd'       => '85', // Fortaleza (CE)
                'telefone'  => '2222222222'
            ],
            2 => [
                'nome'      => 'Fornecedor 3',
                'status'    => 'S',
                'cnpj'      => null,
                'ddd'       => '21', // Rio de Janeiro(RJ)
                'telefone'  => '3333333333'
            ]
        ];
        return view('app.fornecedores', compact('fornecedores'));
    }
}
