@extends('layouts.app')

@section('content')



@if (session()->has('message'))
{{session()->get('message')}}

@endif
<a href="{{ route('home') }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>


<a href="#" class="btn btn-secondary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-check"></i>
    </span>
    <span class="text">Adicionar Material</span>
</a>
<hr>
<form action="{{route('paiolthree.store')}}"  method="post">
    @csrf


    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="diametro">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data_recebido">Data de entrada:</label>
        <input type="date" name="data_recebido" id="data_recebido" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="numero_lote">Referência/Número de lote:</label>
        <input type="text" name="numero_lote" placeholder=" Exemplo 32/2306023" id="data_validade" class="form-control" required>
    </div>



    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data_producao">Data de produção:</label>
        <input type="date" name="data_producao" id="data_producao" class="form-control" required>
    </div>

   
    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data_validade">Data de Validade:</label>
        <input type="date" name="data_validade" id="data_validade" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" class="form-control" required>
    </div>

    


    <button type="submit" class=" btn btn-success">Criar</button>
</form>
@endsection
