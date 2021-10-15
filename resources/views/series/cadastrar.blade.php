@extends('layout.template')
@section('titulo')
    Adicionar Nova Série
@endsection
@section('content')
<form method="post" action="/series/create">
    @csrf
    <div class="mb-3">
      <label for="descricao" class="form-label">Descricao:</label>
      <input type="text" name="descricao" class="form-control" id="descricao">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
@endsection