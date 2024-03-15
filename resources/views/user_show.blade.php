@extends('layouts.app')

@section('content')

<h5>User - {{$user->name}}</h5>|<h5>Email - {{$user->email}}</h5>

<form action="{{route('users.destroy',['user' => $user->id])}}" method="post">
@csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Apagar</button>
</form>
@endsection
