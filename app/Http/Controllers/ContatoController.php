<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required | min:3 | max:40',
            'email' => 'email',
            'telefone' => 'required',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required | max:2000'
        ]);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
