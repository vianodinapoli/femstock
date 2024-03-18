@extends('layouts.app')

@section('content')





<h2>Gemulex 32</h2><a style="float: right" href="{{'gemulex/create'}}">Adicionar Gemulex</a>

{{-- <ul>
    @foreach ($gemulexes as $gemulex )
    @csrf
    <li>{{ $gemulex->id}} - {{ $gemulex->diametro}} - {{ $gemulex->data_recebido}} - {{ $gemulex->numero_lote}} - {{ $gemulex->data_producao}} - {{ $gemulex->data_validade}} - {{ $gemulex->quantidade}}- {{ $gemulex->updated_at}}  | <a href="{{route('gemulex.edit',['gemulex'=>$gemulex->id])}}">Editar</a> | | <a href="{{route('gemulex.show', ['gemulex'=>$gemulex->id])}}">Show</a>

    @endforeach
</ul> --}}

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Diametro</th>
        <th>Data_recebido</th>
        <th>Numero_lote</th>
        <th>Data_producao</th>
        <th>Data_validade</th>
        <th>Quantidade</th>

        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($gemulexes as $gemulex)
      
        <tr>
          <td>{{ $gemulex->diametro }}</td>
          <td>{{ $gemulex->data_recebido }}</td>
          <td>{{ $gemulex->numero_lote }}</td>
          <td>{{ $gemulex->data_producao }}</td>
          <td>{{ $gemulex->data_validade }}</td>
          <td>{{ $gemulex->quantidade }}</td>
          
          <td style="
          display: flex;
          justify-content: space-evenly;
          align-items: center;">
            <a href="{{ route('gemulex.edit', $gemulex->id) }}">Editar</a> | 
            <a href="{{ route('gemulex.show', $gemulex->id) }}">Detalhes</a> | 
            {{-- <a href="{{ route('users.destroy', $user->id) }}" onclick="event.preventDefault(); confirm('Deseja realmente excluir este usuário?') && this.submit();">Excluir</a> --}}
            <form action="{{route('gemulex.destroy',['gemulex' => $gemulex->id])}}" method="post">
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
