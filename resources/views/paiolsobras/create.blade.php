@extends('layouts.app')

@section('content')



@if (session()->has('message'))
{{session()->get('message')}}

@endif
<a href="{{ url()->previous() }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>


<a href="#" class="btn btn-secondary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-check"></i>
    </span>
    <span class="text">Adicionar Material</span>
</a>
<hr>
<form action="{{route('paiolsobras.store')}}"  method="post">
    @csrf


    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="diametro">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control" required>
    </div>


    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" class="form-control" required>
    </div>

    


    <button type="submit" class=" btn btn-success mb-20 mb-20 float-right">Criar</button>
</form>
@endsection
