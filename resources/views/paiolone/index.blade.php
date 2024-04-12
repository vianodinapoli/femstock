@extends('layouts.app')
@notifyCss

@section('content')



<div class="tabTitle">
<h2>PAIOL 01
</h2>
<hr>
<a href="{{route('home') }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>

<a href="{{ route('paiolone.create') }}" class="btn btn-success mb-20 mb-20 float-right">
  <i class="fa fa-plus"></i>Adicionar Material
</a>

</div>

<hr>

<div class="card shadow mb-4">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>#</th>
        <th>Descição</th>
        <th>Referência/Número de lote:</th>
        <th>Data de produção</th>
        <th>Data de validade</th>
        <th>Quantidade</th>

        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($paiolones as $paiolone)
      
        <tr>
          <td>{{ $paiolone->id }}</td>
          <td>{{ $paiolone->descricao }}</td>
          <td>{{ $paiolone->numero_lote }}</td>
          <td>{{ $paiolone->data_producao }}</td>
          <td>{{ $paiolone->data_validade }}</td>
          <td>{{ $paiolone->quantidade }}</td>
          
          <td style="
          display: flex;
          justify-content: space-evenly;
          align-items: flex-start;">
           <a href="{{ route('paiolone.edit', $paiolone->id) }}" class="btn btn-primary">
            <i class="fa-regular fa-pen-to-square"></i> 
        </a>
             
            <form action="{{route('paiolone.destroy',['paiolone' => $paiolone->id])}}" method="post">
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
