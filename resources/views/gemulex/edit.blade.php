@extends('layouts.app')

@section('content')

<h2>Editar GEMULEX</h2>

@if (session()->has('message'))
{{session()->get('message')}}

@endif
<form action="{{route('gemulex.update', ['gemulex' =>$gemulex->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="descricao">Diametro:</label>
        <input type="text" name="diametro" value="{{$gemulex->diametro}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="data_producao">Data de recepção:</label>
        <input type="date" name="data_recebido" value="{{$gemulex->data_recebido}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="numero_lote">Número de Lote:</label>
        <input type="text" name="numero_lote" value="{{$gemulex->numero_lote}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="data_producao">Data de Produção:</label>
        <input type="date" name="data_producao" value="{{$gemulex->data_producao}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="data_validade">Data de validade:</label>
        <input type="date" name="data_validade" value="{{$gemulex->data_validade}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" value="{{$gemulex->quantidade}}" class="form-control" required>
    </div>






    <button type="submit" class=" btn btn-success">Editar</button>
</form>
@endsection
