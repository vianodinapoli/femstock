@extends('layouts.app')


@if (session()->has('message'))
{{session()->get('message')}}

@endif
@section('content')
<a href="{{ url()->previous() }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>

<a href="#" class="btn btn-secondary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-check"></i>
    </span>
    <span class="text">Adicionar Viatura</span>
</a>
<hr>

<form method="post" action="{{ route('femviatura.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="marca">Marca e Matrícula:</label>
        <input type="text" name="marca" id="marca" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="cor">Cor:</label>
        <input type="text" name="cor" id="cor" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="ano_fabricacao">Ano de Fabricação:</label>
        <input type="number" name="ano_fabricacao" id="ano_fabricacao" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="seguro">Seguro:</label>
        <input type="date" name="seguro" id="seguro" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="inspecao">Data de Inspeção:</label>
        <input type="date" name="inspecao" id="inspecao" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="documento">Documento:</label>
        <input type="file" name="documento" id="documento" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Criar Viatura</button>
</form>

@endsection
