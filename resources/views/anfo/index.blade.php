@extends('layouts.app')

@section('content')



<button type="submit" class="btn btn-success"><a href="{{route('anfo.create')}}" style="color: #fff">Adicionar Anfo</a></button>

<hr>

<h1 class="mb-4 mt-4">Dinamite Anfo</h1>

@notifyCss


<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>#</th>
        <th>Descrição</th>
        <th>Data de produção</th>
        <th>Número de lote</th>
        <th>Data de validade</th>
        <th>Quantidade</th>
         <th>Registado em</th> 
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($anfos as $anfo)
        <tr>
          <td>{{ $anfo->id }}</td>
          <td>{{ $anfo->descricao }}</td>
          <td>{{ $anfo->data_producao }}</td>
          <td>{{ $anfo->numero_lote }}</td>
          <td>{{ $anfo->data_validade }}</td>
          <td>{{ $anfo->quantidade }}</td>
          <td>{{ $anfo->created_at->format('d/m/Y H:i:s') }}</td>
          {{-- <td>{{ $anfo->updated_at->format('d/m/Y H:i:s') }}</td> --}}
          <td style="
          display: flex;
          justify-content: space-evenly;
          align-items: center;">
            <a href="{{ route('anfo.edit', $anfo->id) }}">Editar</a> | 
            {{-- <a href="{{ route('anfos.show', $anfo->id) }}">Detalhes</a> |  --}}
            {{-- <a href="{{ route('anfos.destroy', $anfo->id) }}" onclick="event.preventDefault(); confirm('Deseja realmente excluir este usuário?') && this.submit();">Excluir</a> --}}
            <form action="{{route('anfo.destroy',['anfo' => $anfo->id])}}" method="post">
                @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Apagar</button>
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