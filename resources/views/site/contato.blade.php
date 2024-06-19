@extends('site.layouts.base')
@section('title', 'Contato')

@section('conteudo')
    @include('site.layouts._partials._menu')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                  {{-- Movido para antes do componente --}}

                @component('site.layouts._components.form_contato', ['classe' => 'borda-preta', 'motivo_contatos' => $motivo_contatos])
                    <p>Restornaremos o mais brevemente possível! </p>
                    <p>Tempo médio de resposta: 48 horas.</p>
                @endcomponent
            </div>
        </div>
    </div>

    {{print_r($motivo_contatos)}}
    @include('site.layouts._partials._footer')
@endsection
