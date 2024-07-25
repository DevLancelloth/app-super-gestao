@extends('site.layouts.base')
@section('title', $titulo)

@section('conteudo')
    @include('site.layouts._partials._menu')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action={{ route('home.login') }} method="POST">
                    @csrf
                    <input value="{{ old('usuario') }}" name="usuario" type="text" placeholder="Usuário" class="borda-preta">
                    {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
                    <input name="senha" value="{{ old('senha') }}" type="password" placeholder="senha"
                        class="borda-preta">
                    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                    <button type="submit" class="borda-preta">Acessar</button>
                </form>
            </div>
        </div>
    </div>
    @include('site.layouts._partials._footer')
@endsection
