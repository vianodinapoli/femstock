@extends('layouts.app')


@if (session()->has('message'))
{{session()->get('message')}}

@endif
@section('content')
<h1>Nova Viatura</h1>

<form method="post" action="{{ route('femviatura.store') }}">
    @csrf

    <div class="form-group">
        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="cor">Cor:</label>
        <input type="text" name="cor" id="cor" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="ano_fabricacao">Ano de Fabricação:</label>
        <input type="number" name="ano_fabricacao" id="ano_fabricacao" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="seguro">Seguro:</label>
        <input type="date" name="seguro" id="seguro" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="inspecao">Data de Inspeção:</label>
        <input type="date" name="inspecao" id="inspecao" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="documento">Documento:</label>
        <input type="file" name="documento" id="documento">
    </div>

    <button type="submit" class="btn btn-primary">Criar Viatura</button>
</form>

@endsection
