{{ $slot }}
<form action={{ route('home.contato') }} method="POST">
    @csrf
    <input name="nome" value='{{ old('nome')}}' type="text" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" value='{{old('telefone')}}' type="text" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" value='{{old('email')}}' type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo_contato" class="{{ $classe }}">
        <option value="1">Qual o motivo do contato?</option>
        <option value="2">Dúvida</option>
        <option value="3">Elogio</option>
        <option value="4">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" value='{{old('mensagem')}}' class="{{ $classe }}">
        {{(old('mensagem') != '' ? old('mensagem') : 'Preencha sua mensagem')}}
    </textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

<div style="position: absolute; top: 0px; left: 0px; width: 100%; background: red;">
    <pre>
        {{ print_r($errors) }}
    </pre>
</div>
