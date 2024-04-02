@extends('layouts.app')

@section('content')

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<a href="{{ url()->previous() }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>

<a href="#" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-pencil-alt"></i> 
    </span>
    <span class="text">Editar - {{ $paiolsobras->descricao }}</span>
</a>
<hr>

<form action="{{ route('paiolsobras.update', $paiolsobras->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="descricao">Descrição/Diâmetro:</label>
        <input type="text" name="descricao" value="{{ $paiolsobras->descricao }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" value="{{ $paiolsobras->quantidade }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Editar</button>
</form>

@endsection
