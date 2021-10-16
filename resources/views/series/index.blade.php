@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
<a href="{{ route('criar-serie') }}" class="btn btn-dark mb-2">Adicionar</a>

@if(!empty($mensagem))
    <div class="alert alert-success">
        {{ $mensagem }}
    </div>
@endif

<ul class="list-group">
    @foreach($series as $serie)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $serie->nome }}

        <span class="d-flex">
            <a href="/series/{{$serie->id}}/temporadas" class="btn btn-info btn-sm mr-1">
                <i class="fas fa-external-link-alt"></i>
            </a>
        <form method="post" action="/series/remover/{{$serie->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{addslashes($serie->nome)}} ? ')">
            @csrf
            <button class="btn btn-danger btn-sm">
                <i class="fas fa-trash"></i>
            </button>
        </form>
     </span>
</li>
    @endforeach
</ul>
@endsection
