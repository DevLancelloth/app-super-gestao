<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato()
    {
        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {

        $valores = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'email' => 'required | email',
            'telefone' => 'required',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $parametros = [
            'nome.required' => 'O nome é obrigatório.',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres.',
            'nome.max' => 'O nome não pode ter mais de 40 caracteres.',
            'nome.unique' => 'Este nome já foi cadastrado.',

            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'O e-mail informado não é válido.',

            'telefone.required' => 'O telefone é obrigatório.',

            'motivo_contatos_id.required' => 'O motivo de contato é obrigatório.',

           'mensagem.required' => 'A mensagem é obrigatória.',
        ];


        $request->validate($valores, $parametros);

        $contato = SiteContato::create($request->all());
        return redirect()->route('home.contato');
    }
}
