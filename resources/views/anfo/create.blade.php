@extends('layouts.app')

@section('content')

<h2>Create</h2>

@if (session()->has('message'))
{{session()->get('message')}}

@endif
<form action="{{route('anfo.store')}}"  method="post">
    @csrf

    <input type="text"  name="descricao" placeholder="Descricao">
    <input type="date"  name="data_producao" placeholder="Data de Produção">
    <input type="text"  name="numero_lote" placeholder="Numero de lote">
    <input type="date"  name="data_validade" placeholder="Data de validade">
    <input type="number"  name="quantidade" placeholder="Quantidade">

    <button type="submit" class=" btn btn-primary">Criar</button>
</form>



@endsection
