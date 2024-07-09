<?php

namespace App\Http\Controllers;
use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobrenos()
    {
        return view('site.sobre-nos');
    }
}
