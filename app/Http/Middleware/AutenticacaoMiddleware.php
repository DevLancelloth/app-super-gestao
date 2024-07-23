<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao, $perfil): Response
    {
        echo $metodo_autenticacao . ' - ' . $perfil . '<br>';

        if ($metodo_autenticacao === 'padrao') {
            echo ('Verificando usuário e senha no BD ') . $perfil . '<br>';
        }
        if ($metodo_autenticacao === 'ldap') {
            echo ('Verifindo usuário e senha via AD ') . $perfil . '<br>';
        }

        if ($perfil == 'Contribuinte') {
            echo ('Acesso permitido para ' . $perfil . ' (Algumas funções estão bloqueadas)');
        }

        if ($perfil == 'eticons') {
            echo ('Acesso permitido para ' . $perfil . '(todas as funções estão liberadas)');
        }

        if (true) {
            return $next($request);
        } else {
            return response('Acesso Negado!! Rota exige autenticação!!!');
        }
    }
}
