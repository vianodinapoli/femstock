@extends('layouts.app')

@section('content')

<h5>GEMULEX #@ - {{$gemulex->id}}</h5>

<form action="{{route('gemulex.destroy',['gemulex' => $gemulex->id])}}" method="post">
@csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Apagar</button>
</form>
@endsection
