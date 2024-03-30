@extends('layouts.app')
@notifyCss

@section('content')
    <div class="tabTitle">
        <h2 class="">Usuários</h2>
        <hr>
        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>

        <a href="{{ route('users.create') }}" class="btn btn-primary">
            <i class="fas fa-pen-alt"></i> Adicionar usuários
        </a>
    </div>
    <div class="card shadow mb-4">
        

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
                        <td
                            style="
          display: flex;
          justify-content: space-evenly;
          align-items: flex-start;">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">
                                <i class="fas fa-pencil-alt"></i>Editar
                            </a>
                            <form class="form" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Apagar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
    </div>
    <x-notify::notify />
    @notifyJs
    </body>
@endsection
