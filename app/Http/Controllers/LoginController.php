<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request)
    {
        //regras de validação
        $regras = [
            'usuario' => 'email|required',
            'senha' => 'required|min:8'
        ];

        //mensagem do feeback de validação
        $feedback = [
            'email.email' => 'O campo :attribute deve conter um email válido.',
            'email.required' => 'O campo :attribute é obrigatório.',
            'senha.required' => 'O campo :attribute é obrigatório.',
            'senha.min' => 'A senha deve ter no mínimo 8 caracteres.'
        ];

        $request->validate($regras, $feedback);

        // recuperando os parametros do formulário para realizar a autenticação
        $email = $request->get('usuario');
        $password = $request->get('senha');

        echo "Usuário: $email | Senha: $password";
        echo "<br>";

        //iniciar o model user
        $user = new User();

        $usuario = $user->where('email', $email)
            ->where('password', ($password))
            ->get();

        $usuario = $usuario->first();
        if (isset($usuario)) {
            echo "Login efetuado com sucesso!";
        } else {
            echo "Usuário ou senha inválidos!";
        }
        echo "<pre>";
        print_r($usuario);
        echo "</pre>";
    }
}
