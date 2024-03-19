@extends('layouts.app')

@section('content')



<button type="submit" class="btn btn-success"><a href="{{'create'}}" style="color: #fff">Adicionar usuários</a></button>

<hr>

<h2>Users</h2>



<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Criado em</th>
        {{-- <th>Atualizado em</th> --}}
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->created_at->format('d/m/Y H:i:s') }}</td>
          {{-- <td>{{ $user->updated_at->format('d/m/Y H:i:s') }}</td> --}}
          <td style="
          display: flex;
          justify-content: space-evenly;
          align-items: center;">
            <a href="{{ route('users.edit', $user->id) }}">Editar</a> | 
            <a href="{{ route('users.show', $user->id) }}">Detalhes</a> | 
            {{-- <a href="{{ route('users.destroy', $user->id) }}" onclick="event.preventDefault(); confirm('Deseja realmente excluir este usuário?') && this.submit();">Excluir</a> --}}
            <form action="{{route('users.destroy',['user' => $user->id])}}" method="post">
                @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  

@endsection
