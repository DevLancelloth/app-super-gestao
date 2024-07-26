<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\LogAcesso;

class LogAcessoMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Para salvar log de acesso na base de dados
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcesso::create(['log' => "$ip requisitou a rota: $rota"]);
        ///////////////////////////////////////////////////////////////
        LogAcesso::create(['log'=> "$ip requisitou a rota: $rota"]);

        // return $next($request);

        $resposta = $next($request);
        $resposta->setStatusCode(201, 'Acesso logado com sucesso!');  // Altera o status code para 20);
        return $resposta;
    }
}