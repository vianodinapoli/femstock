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
    <span class="text">Editar - {{$extintor->id}}</span>
</a>
<hr>

<form action="{{route('extintor.update', ['extintor' => $extintor->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="marca">Número ou descrição</label>
        <input type="text" name="numero" value="{{$extintor->numero}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="modelo">Agente:</label>
        <input type="text" name="agente" value="{{$extintor->agente}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="peso">Peso:</label>
        <input type="text" name="peso" value="{{$extintor->peso}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="localizacao">Localização:</label>
        <input type="text" name="localizacao" value="{{$extintor->localizacao}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="verificado">Verificado:</label>
        <input type="date" name="verificado" value="{{$extintor->verificado}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="inspecao">Proxima verificação:</label>
        <input type="date" name="proxima_ver" value="{{$extintor->proxima_ver}}" class="form-control" required>
    </div>
  
    








    <button type="submit" class=" btn btn-success">Editar</button>
</form>
@endsection
