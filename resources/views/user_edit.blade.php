@extends('layouts.app')

@section('content')


@if (session()->has('message'))
{{session()->get('message')}}

@endif
<a href="{{ url()->previous() }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>

<a href="#" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fa-regular fa-pen-to-square"></i> 
    </span>
    <span class="text">Editar - {{$user->name}}</span>
</a>
<hr>

<form action="{{route('users.update', ['user' =>$user->id])}}" method="post">
    @csrf
     <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="name">Nome:</label>
        <input type="text"  name="name" value="{{$user->name}}" class="form-control" required>
    </div>

   
    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="email">Email:</label>
        <input type="text"  name="email" value="{{$user->email}}" required class="form-control" required>
    </div>

    <div class="form-group">
        <label  class="m-0 font-weight-bold text-black" for="password">Senha:</label>
        <input type="password" name="password" id="password" value="{{ $user->password }}" class="form-control" required>
    </div>


    <button type="submit" class="btn btn-primary">Editar</button>
</form>



@endsection
