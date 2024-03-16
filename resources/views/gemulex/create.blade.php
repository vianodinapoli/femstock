@extends('layouts.app')

@section('content')

<h2>Adicionar</h2>

@if (session()->has('message'))
{{session()->get('message')}}

@endif
<form action="{{route('gemulex.store')}}"  method="post">
    @csrf

    <input type="text"  name="diametro" placeholder="Digite o diâmetro">
    <input type="date"  name="data_recebido" placeholder="Digite a data de entrada">
    <input type="text"  name="numero_lote" placeholder="Digite o número de lote">
    <input type="date"  name="data_producao" placeholder="Digite a data de produção">
    <input type="date"  name="data_validade" placeholder="Digite a data de validade">
    <input type="number"  name="quantidade" placeholder="Digite a quantidade">

    <button type="submit">Criar</button>
</form>
@endsection
