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
        ///////////////////////////////////////////////////////////////
        LogAcesso::create(['log'=> "$ip requisitou a rota: $rota"]);
        return $next($request);
        return response('Chegamos no middleware e finalizamos no mesmo');
    }
}
