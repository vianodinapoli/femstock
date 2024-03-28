@extends('layouts.app')

@section('content')


<a href="#" class="btn btn-secondary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-check"></i>
    </span>
    <span class="text">Criar Usuário</span>
</a>
<hr>

@if (session()->has('message'))
{{session()->get('message')}}

@endif
<form action="{{route('users.store')}}"  method="post">
    @csrf

    {{-- <input type="text"  name="name" placeholder="Digite seu nome" required>
    <input type="text"  name="email" placeholder="Digite seu email" required>
    <input type="text"  name="password" placeholder="Digite sua senha" required>
 --}}



    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="name">Nome:</label>
        <input type="text"  name="name" placeholder="Digite seu nome" class="form-control" required>
    </div>

   
    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="email">Email:</label>
        <input type="text"  name="email" placeholder="Digite seu email" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="password">Senha:</label>
        <input type="text"  name="password" placeholder="Digite sua senha" class="form-control" required>
    </div>







    <button type="submit" class=" btn btn-success">Criar</button>
</form>



@endsection
