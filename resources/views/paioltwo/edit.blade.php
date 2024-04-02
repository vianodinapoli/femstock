@extends('layouts.app')

@section('content')



@if (session()->has('message'))
{{session()->get('message')}}

@endif
<a href="{{ url()->previous() }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>

<a href="#" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-pencil-alt"></i> 
    </span>
    <span class="text">Editar - {{$paioltwo->descricao}}</span>
</a>
<hr>

<form action="{{route('paioltwo.update', ['paioltwo' =>$paioltwo->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="descricao">Descrição/Diametro:</label>
        <input type="text" name="descricao" value="{{$paioltwo->descricao}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data_producao">Data de recepção:</label>
        <input type="date" name="data_recebido" value="{{$paioltwo->data_recebido}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="numero_lote">Referência/Número de lote:</label>
        <input type="text" name="numero_lote" value="{{$paioltwo->numero_lote}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data_producao">Data de Produção:</label>
        <input type="date" name="data_producao" value="{{$paioltwo->data_producao}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data_validade">Data de validade:</label>
        <input type="date" name="data_validade" value="{{$paioltwo->data_validade}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" value="{{$paioltwo->quantidade}}" class="form-control" required>
    </div>






    <button type="submit" class=" btn btn-success">Editar</button>
</form>
@endsection
