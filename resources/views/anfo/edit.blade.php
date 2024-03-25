@extends('layouts.app')

@section('content')

<h2>Editar Dinamite Anfo</h2>

@if (session()->has('message'))
{{session()->get('message')}}

@endif
<form action="{{route('anfo.update', ['anfo' =>$anfo->id])}}" method="post">
    @csrf
   
    
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" value="{{$anfo->descricao}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="data_producao">Data de Produção:</label>
        <input type="date" name="data_producao" value="{{$anfo->data_producao}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="numero_lote">Número de Lote:</label>
        <input type="text" name="numero_lote" value="{{$anfo->numero_lote}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="data_validade">Data de validade:</label>
        <input type="date" name="data_validade" value="{{$anfo->data_validade}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="seguro">Quantidade:</label>
        <input type="number" name="quantidade" value="{{$anfo->quantidade}}" class="form-control" required>
    </div>

 

    <button type="submit" class=" btn btn-primary">Editar</button>
</form>
@endsection
