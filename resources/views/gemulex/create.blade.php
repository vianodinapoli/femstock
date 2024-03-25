@extends('layouts.app')

@section('content')



@if (session()->has('message'))
{{session()->get('message')}}

@endif
<form action="{{route('gemulex.store')}}"  method="post">
    @csrf


    <div class="form-group">
        <label for="diametro">Diametro:</label>
        <input type="text" name="diametro" id="diametro" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="data_recebido">Data de entrada:</label>
        <input type="date" name="data_recebido" id="data_recebido" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="numero_lote">Número de lote:</label>
        <input type="text" name="numero_lote" id="data_validade" class="form-control" required>
    </div>



    <div class="form-group">
        <label for="data_producao">Data de produção:</label>
        <input type="date" name="data_producao" id="data_producao" class="form-control" required>
    </div>

   
    <div class="form-group">
        <label for="data_validade">Data de Validade:</label>
        <input type="date" name="data_validade" id="data_validade" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" class="form-control" required>
    </div>

    


    <button type="submit" class=" btn btn-success">Criar</button>
</form>
@endsection
