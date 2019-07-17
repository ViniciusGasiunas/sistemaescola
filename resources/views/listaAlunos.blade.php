@extends('template')

@section('conteudo')

<ul>
    @foreach($alunos as $aluno)
        <li>{{ $aluno->nome}}
            <a href="/aluno/deletar/{{$aluno->id}}">Deletar</a>
        </li>
    @endforeach
</ul>
@endsection