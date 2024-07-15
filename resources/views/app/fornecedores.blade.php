<h3>Contribuinte (View)</h3>



@isset($fornecedores)
    @forelse($fornecedores as $indices => $fornecedor)
        Interação atual: {{ $loop->iteration }}
        <br>
        Contribuinte: {{ $fornecedor->nome }}
        <br>
        Status: {{ $fornecedor->email }}
        <br>
        Email: {{ $fornecedor->site }}
        <br>
        UF: {{ $fornecedor->uf }}
        @if ($loop->first)
            Primeiro fornecedor cadastrado
        @endif
        @if ($loop->last)
            Ultimo fornecedor cadastrado
            <br>
            <hr>
            Total de registros: {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem contribuintes cadastrados!!
    @endforelse
@endisset
