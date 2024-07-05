<h3>Forncedor (View)</h3>



@isset($fornecedores)
    @forelse($fornecedores as $indices => $fornecedor)
        Interação atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] }}) {{ $fornecedor['telefone'] }}
        @if ($loop->first)
            Primeiro fornecedor cadastrado
        @endif
        @if ($loop->last)
            Ultimo fornecedor cadastrado
            <br>
            Total de registros: {{ $loop->count }}
        @endif

        <hr>
    @empty
        Não existem fornecedores cadastrados!!
    @endforelse
@endisset
