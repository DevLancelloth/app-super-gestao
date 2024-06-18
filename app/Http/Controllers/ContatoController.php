<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
       // $contato = new SiteContato();
       // $contato->fill($request->all());

        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }

    public function salvar(Request $request){
        $request->validate([
           'nome' => 'required | min:3 | max:40',
           'email' => 'required',
           'telefone' => 'required',
           'motivo_contato' => 'required',
           'mensagem' => 'required | max:2000'
        ]);
    }
}
