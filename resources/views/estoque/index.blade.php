@extends('layouts.app')
@notifyCss

@section('content')



<div class="tabTitle">
<h2>OFICINA</h2>
<hr>
<a href="{{route('home') }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>

<a href="{{ route('estoque.create') }}" class="btn btn-success mb-20 mb-20 float-right">
  <i class="fa fa-plus"></i>Adicionar
</a>

</div>
<hr>

<div class="gemulex" style="text-align:left;" >
  <a  class="btn btn-primary btn-icon-split" style="margin-bottom: 10px">
    <span class="icon text-white-50">
        Stock de Pneus
    </span>
    <span class="text">0</span>
  </a>
  <a href="#" class="btn btn-danger btn-icon-split" style="margin-bottom: 10px">
    <span class="icon text-white-50">
        Stock de Peças/Trelas
    </span>
    <span class="text">0</span>
  </a>
  
  <a href="#" class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
    <span class="icon text-white-50">
        Stock de Peças Volvo
    </span>
    <span class="text">0</span>
  </a>
  <a href="#" class="btn btn-info btn-icon-split" style="margin-bottom: 10px">
    <span class="icon text-white-50">
        Stock de peças FAW
    </span>
    <span class="text">0</span>
  </a>
  
  
</div>
<div class="card shadow mb-4">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="10">
    <thead>
      <tr>
        <th>#</th>
        <th>Marca/Destino</th>
        <th>Referência</th>
        <th>Descrição:</th>
        <th>Data</th>
        <th>Peças</th>
        <th>Entradas</th>
        <th>Saídas</th>
        <th>Qtd.</th>
        <th>Custo Un</th>
        <th> Total</th>
        {{-- <th>Regist em</th> --}}
        {{-- <th>Actual em</th> --}}



        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($estoques as $estoque)
      
        <tr>
          <td>{{ $estoque->id }}</td>
          <td>{{ $estoque->marca_destino }}</td>
          <td>{{ $estoque->referencia }}</td>
          <td>{{ $estoque->descricao }}</td>
          <td>{{ $estoque->data->format('d-m-Y') }}</td>
          <td>{{ $estoque->pecas }}</td>
          <td>{{ $estoque->pecas_entradas }}</td>
          <td>{{ $estoque->pecas_saidas }}</td>
          <td>{{ $estoque->quantidade }}</td>
          <td>{{ $estoque->custo_unitario }}</td>
          <td>{{ number_format($estoque->quantidade * $estoque->custo_unitario, 2,2) }}</td>
          
          {{-- <td>{{ $estoque->created_at->format('d-m-Y')}}</td> --}}
          {{-- <td>{{ $estoque->updated_at->format('d-m-Y') }}</td> --}}


          
          <td style="
          display: flex;
          justify-content: space-evenly;
          align-items: flex-start;">
           <a href="{{ route('estoque.edit', $estoque->id) }}" class="btn btn-primary">
            <i class="fa-regular fa-pen-to-square"></i> 
        </a>
             
            <form action="{{route('estoque.destroy',['estoque' => $estoque->id])}}" method="post">
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
