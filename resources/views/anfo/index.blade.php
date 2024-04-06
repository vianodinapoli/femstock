@extends('layouts.app')
@notifyCss

@section('content')

<div class="tabTitle">

  <h2 class="mb-4 mt-4">DINAMITE ANFO</h2>

  <hr>
  <a href="{{route('home') }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>

<a href="{{ route('anfo.create') }}" class="btn btn-success mb-20 mb-20 float-right">
  <i class="fa fa-plus"></i> Adicionar Anfo
</a>
</div>
<hr>

<div style="  text-align: left;">
<a href="#" class="btn btn-primary btn-icon-split" style="margin-bottom: 10px">
  <span class="icon text-white-50">
      Total de Anfo
  </span>
  <span class="text">{{$quantidadeAnfos}}</span>
</a>
</div>
<div class="card shadow mb-4">


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
          <td>{{ $anfo->data_producao}}</td>
          <td>{{ $anfo->numero_lote }}</td>
          <td>{{ $anfo->data_validade }}</td>
          <td>{{ $anfo->quantidade }}</td>
          <td>{{ $anfo->created_at->format('d/m/Y H:i:s') }}</td>
          {{-- <td>{{ $anfo->updated_at->format('d/m/Y H:i:s') }}</td> --}}
          <td style="
          display: flex;
          justify-content: space-evenly;
          align-items: flex-start;">
            {{-- <a href="{{ route('anfo.edit', $anfo->id) }}">Editar</a> --}}
            <a href="{{ route('anfo.edit', $anfo->id) }}" class="btn btn-primary">
              <i class="fa-regular fa-pen-to-square"></i> 
          </a> 
            {{-- <a href="{{ route('anfos.show', $anfo->id) }}">Detalhes</a> |  --}}
            {{-- <a href="{{ route('anfos.destroy', $anfo->id) }}" onclick="event.preventDefault(); confirm('Deseja realmente excluir este usuário?') && this.submit();">Excluir</a> --}}
            <form action="{{route('anfo.destroy',['anfo' => $anfo->id])}}" method="post">
                @csrf
                    <input type="hidden" name="_method" value="DELETE">
<button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="fas fa-trash"></i></button>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Tem a certeza de que pretende apagar?`,
              text: "Se apagar isto, desaparecerá para sempre.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
    </script>

@endsection
