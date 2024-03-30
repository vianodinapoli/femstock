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
    <span class="text">Editar - {{$femViatura->id}}</span>
</a>
<hr>

<form action="{{route('femviatura.update', ['femviatura' => $femViatura->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="marca">Marca e Matrícula:</label>
        <input type="text" name="marca" value="{{$femViatura->marca}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="modelo">Modelo:</label>
        <input type="text" name="modelo" value="{{$femViatura->modelo}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="cor">Cor:</label>
        <input type="text" name="cor" value="{{$femViatura->cor}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="ano_fabricacao">Ano de Fabrico:</label>
        <input type="year" name="ano_fabricacao" value="{{$femViatura->ano_fabricacao}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="seguro">Seguro:</label>
        <input type="date" name="seguro" value="{{$femViatura->seguro}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="inspecao">Inspeção:</label>
        <input type="date" name="inspecao" value="{{$femViatura->inspecao}}" class="form-control" required>
    </div>
  
    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="documento">Documento:</label>
        <input type="file" name="documento" value="{{$femViatura->inspecao}}" class="form-control" >
    </div>








    <button type="submit" class=" btn btn-success">Editar</button>
</form>
@endsection
