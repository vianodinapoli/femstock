@extends('layouts.app')

@section('content')

<h2>Editar Dinamite Anfo</h2>

@if (session()->has('message'))
{{session()->get('message')}}

@endif
<form action="{{route('anfo.update', ['anfo' =>$anfo->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text"  name="descricao" value="{{$anfo->descricao}}">
    <input type="texdatet"  name="data_producao" value="{{$anfo->data_producao}}">
    <input type="text"  name="numero_lote" value="{{$anfo->numero_lote}}">
    <input type="tedatext"  name="data_validade" value="{{$anfo->data_validade}}">
    <input type="date"  name="data_validade" value="{{$anfo->data_validade}}">
    <input type="number"  name="quantidade" value="{{$anfo->quantidade}}">
    


    <button type="submit" class=" btn btn-primary">Editar</button>
</form>
@endsection
