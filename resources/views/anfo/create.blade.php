@extends('layouts.app')

@section('content')

<h2>Create</h2>

@if (session()->has('message'))
{{session()->get('message')}}

@endif
<form action="{{route('anfo.store')}}"  method="post">
    @csrf

    {{-- <input type="text"  name="descricao" placeholder="Descricao">
    <input type="date"  name="data_producao" placeholder="Data de Produção">
    <input type="text"  name="numero_lote" placeholder="Numero de lote">
    <input type="date"  name="data_validade" placeholder="Data de validade">
    <input type="number"  name="quantidade" placeholder="Quantidade"> --}}

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="data_producao">Data de produção:</label>
        <input type="date" name="data_producao" id="numero_lote" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="numero_lote">Número de lote:</label>
        <input type="text" name="numero_lote" id="data_validade" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="data_validade">Data de Validade:</label>
        <input type="date" name="data_validade" id="data_validade" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" class="form-control" required>
    </div>

    


    <button type="submit" class=" btn btn-primary">Criar</button>
</form>



@endsection
