@extends('layouts.app')

@section('content')

<h2>Editar GEMULEX</h2>

@if (session()->has('message'))
{{session()->get('message')}}

@endif
<form action="{{route('gemulex.update', ['gemulex' =>$gemulex->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text"  name="diametro" value="{{$gemulex->diametro}}">
    <input type="texdatet"  name="data_recebido" value="{{$gemulex->data_recebido}}">
    <input type="text"  name="numero_lote" value="{{$gemulex->numero_lote}}">
    <input type="tedatext"  name="data_producao" value="{{$gemulex->data_producao}}">
    <input type="date"  name="data_validade" value="{{$gemulex->data_validade}}">
    <input type="number"  name="quantidade" value="{{$gemulex->quantidade}}">


    <button type="submit" class=" btn btn-success">Editar</button>
</form>
@endsection
