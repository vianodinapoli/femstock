@extends('layouts.app')

@section('content')


<a href="{{'gemulex/create'}}">Adicionar Gemulex</a>TODO:melhor esta rota


<h2>Gemulex 32</h2>

<ul>
    @foreach ($gemulexes as $gemulex )
    @csrf
    <li>{{ $gemulex->id}} - {{ $gemulex->diametro}} - {{ $gemulex->data_recebido}} - {{ $gemulex->numero_lote}} - {{ $gemulex->data_producao}} - {{ $gemulex->data_validade}} - {{ $gemulex->quantidade}}- {{ $gemulex->updated_at}}  | <a href="{{route('gemulex.edit',['gemulex'=>$gemulex->id])}}">Editar</a> | | <a href="{{route('gemulex.show', ['gemulex'=>$gemulex->id])}}">Show</a>

    @endforeach
</ul>

@endsection
