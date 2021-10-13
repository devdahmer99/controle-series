@extends('layout.template')

@section('titulo')
    Home | Controle de Séries
@endsection

@section('content')

<div class="list-group">
    <ul>
        <a href="#" class="list-group-item list-group-item-actived">Greys Anatomy</a>
        <a href="#" class="list-group-item list-group-item-actived"> Agents of Shield</a>
    </ul>
</div>

<button class="btn btn-primary"><a href="">Adicionar Nova Serie</a></button>
@endsection
