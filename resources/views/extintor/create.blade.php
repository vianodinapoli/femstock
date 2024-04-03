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
    <span class="text">Adicionar Extintor</span>
</a>
<hr>

<form method="post" action="{{ route('extintor.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="marca">Número do Extintor:</label>
        <input type="text" name="numero" id="numero" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="modelo">Agente:</label>
        <input type="text" name="agente" id="agente" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="cor">Peso:</label>
        <input type="text" name="peso" id="peso" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="ano_fabricacao">Localização:</label>
        <input type="number" name="localizacao" id="localizacao" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="seguro">Verificado Em:</label>
        <input type="date" name="verificado" id="verificado" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="inspecao">Próxima Verificação:</label>
        <input type="date" name="proxima_ver" id="proxima_ver" class="form-control" required>
    </div>

    

    <button type="submit" class="btn btn-primary">Criar Viatura</button>
</form>

@endsection
