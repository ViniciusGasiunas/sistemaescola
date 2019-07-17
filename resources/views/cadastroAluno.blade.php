@extends('template')

@section('conteudo')
<form action="/aluno/cadastro" method="post">
        <!-- @csrf ativa a criptografia do site   -->
        @csrf 
        <input type="text" name="name">
        <input type="text" name="cpf">
        <button type="submit">Enviar</button>
</form>
@endsection