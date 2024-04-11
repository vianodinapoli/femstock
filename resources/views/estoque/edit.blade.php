@extends('layouts.app')

@section('content')



@if (session()->has('message'))
{{session()->get('message')}}

@endif
<a href="{{ url()->previous() }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>

<a href="#" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fa-regular fa-pen-to-square"></i> 
    </span>
    <span class="text">Editar - {{$estoque->marca_destino}}</span>
</a>
<hr>

<form action="{{route('estoque.update', ['estoque' =>$estoque->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="marca_destino">Marca / Destino:</label>
        <input type="text" name="marca_destino" value="{{$estoque->marca_destino}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="referencia">Referencia:</label>
        <input type="text" name="referencia" value="{{$estoque->referencia}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data">Data:</label>
        <input type="date" name="data" value="{{$estoque->data}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data">Peças:</label>
        <input type="number" name="pecas" value="{{$estoque->pecas}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="pecas_entradas">Peças - Entradas:</label>
        <input type="number" name="pecas_entradas" value="{{$estoque->pecas_entradas}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="pecas_saidas">Peças - Saídas:</label>
        <input type="number" name="pecas_saidas" value="{{$estoque->pecas_saidas}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" value="{{$estoque->quantidade}}" class="form-control" required>
    </div>


    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="custo_unitario">Custo unitário:</label>
        <input type="number" name="custo_unitario" value="{{$estoque->custo_unitario}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="custo_total">Custo Total:</label>
        <input type="number" name="custo_total" value="{{$estoque->custo_total}}" class="form-control" required>
    </div>




    <button type="submit" class=" btn btn-success mb-20 mb-20 float-right">Editar</button>
</form>
@endsection
