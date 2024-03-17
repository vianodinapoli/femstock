@extends('layouts.app')

@section('content')


<a href="{{'create'}}">Adicionar usuários</a>
<hr>

<h2>Users</h2>

<ul>
    @foreach ($users as $user )

    <li>{{ $user->name}} | <a href="{{route('users.edit',['user'=>$user->id])}}">Editar</a> | <a href="">Apagar </li> | <a href="{{route('users.show', ['user'=>$user->id])}}">Show</a>

    @endforeach
</ul>


@endsection
