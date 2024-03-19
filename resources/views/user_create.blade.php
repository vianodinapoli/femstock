@extends('layouts.app')

@section('content')

<h2>Create</h2>

@if (session()->has('message'))
{{session()->get('message')}}

@endif
<form action="{{route('users.store')}}"  method="post">
    @csrf

    <input type="text"  name="name" placeholder="Digite seu nome">
    <input type="text"  name="email" placeholder="Digite seu email">
    <input type="text"  name="password" placeholder="Digite sua senha">

    <button type="submit" class=" btn btn-success">Criar</button>
</form>
@endsection
