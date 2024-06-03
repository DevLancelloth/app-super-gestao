@extends('site.layouts.base')
@section('title', 'Sobre Nós')

@section('conteudo')
    @include('site.layouts._partials._menu')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Olá, eu sou o Super Gestão</h1>
        </div>

        <div class="informacao-pagina">
            <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os
                negócios da sua empresa.</p>
            <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
        </div>
    </div>
    @include('site.layouts._partials._footer')
@endsection
