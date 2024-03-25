@extends('layouts.app')
@notifyCss

@section('content')




<h2>Gemulex 32</h2>

<button type="submit" class="btn btn-success" ><a style="color: #fff" href="{{'gemulex/create'}}">Adicionar Gemulex</a></button>

{{-- <ul>
    @foreach ($gemulexes as $gemulex )
    @csrf
    <li>{{ $gemulex->id}} - {{ $gemulex->diametro}} - {{ $gemulex->data_recebido}} - {{ $gemulex->numero_lote}} - {{ $gemulex->data_producao}} - {{ $gemulex->data_validade}} - {{ $gemulex->quantidade}}- {{ $gemulex->updated_at}}  | <a href="{{route('gemulex.edit',['gemulex'=>$gemulex->id])}}">Editar</a> | | <a href="{{route('gemulex.show', ['gemulex'=>$gemulex->id])}}">Show</a>

    @endforeach
</ul> --}}

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>#</th>
        <th>Diametro</th>
        <th>Data recebido</th>
        <th>Número de lote</th>
        <th>Data de prodção</th>
        <th>Data de validade</th>
        <th>Quantidade</th>

        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($gemulexes as $gemulex)
      
        <tr>
          <td>{{ $gemulex->id }}</td>
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
           <a href="{{ route('gemulex.edit', $gemulex->id) }}" class="btn btn-primary">
            <i class="fas fa-pencil-alt"></i> Editar
        </a>
             | 
            <form action="{{route('gemulex.destroy',['gemulex' => $gemulex->id])}}" method="post">
                @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <x-notify::notify />
  @notifyJs
  </body>
@endsection
