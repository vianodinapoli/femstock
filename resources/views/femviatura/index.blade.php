@extends('layouts.app')
@notifyCss

@section('content')
<div class="tabTitle">

<h4>Controle de documentos de Viaturas</h4>
<hr>
<a href="{{route('home') }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>
<a  class="btn btn-success mb-20 mb-20 float-right" data-toggle="modal" data-target="#modalCriarViatura">
  <i class="fa fa-plus"></i> Adicionar Viatura
</a>
</div>


<hr>

<div class="card shadow mb-4">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>#</th>
        <th>Marca e Matrícula</th>
        <th>Modelo </th>
        <th>Cor</th>
        <th>Ano de Fabrico</th>
        <th>Seguros</th>
        <th>Inspeção</th>
        <th>Documento</th>

        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
       @foreach ($femViaturas as $femviatura) 
      
        <tr>
          <td>{{ $femviatura->id }}</td>
           <td>{{ $femviatura->marca }}</td>
          <td>{{ $femviatura->modelo }}</td>
          <td>{{ $femviatura->cor }}</td>
          <td>{{ $femviatura->ano_fabricacao }}</td>
          <td>{{ $femviatura->seguro }}</td>
          <td>{{ $femviatura->inspecao }}</td> 
          <td >
            {{-- <a href="{{ url('documentos/' . $femviatura->documento) }}"> --}}

              {{-- <img src="/documentos/{{ $femviatura->documento }}" width="100px">
              
              Download</img>
             --}}

             <a class="btn btn-secondary" href="{{ asset('/documentos/' . $femviatura->documento) }}" target="_blank">
              <img src="{{ asset('/documentos/' . $femviatura->documento) }}" target="_blank" width="0px">
              
                <i class="fa fa-file"></i> Baixar PDF
          </a>
            </td>
          <td class="acao">
           <a href="{{ route('femviatura.edit', $femviatura->id) }}" class="btn btn-primary">
            <i class="fa-regular fa-pen-to-square"></i>   
        </a>
                <form action="{{route('femviatura.destroy',['femviatura' => $femviatura->id])}}" method="post">
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


  <!-- Modal de criação -->
<div class="modal fade" id="modalCriarViatura" tabindex="-1" role="dialog" aria-labelledby="modalCriarViaturaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="modalCriarViaturaLabel">Adicionar Viatura</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form method="post" action="{{ route('femviatura.store') }}" enctype="multipart/form-data">
                  @csrf

                  <!-- Seu formulário aqui -->
                  <form method="post" action="{{ route('femviatura.store') }}" enctype="multipart/form-data">
                    @csrf
                
                    <div class="form-group">
                        <label class="m-0 font-weight-bold text-black" for="marca">Marca e Matrícula:</label>
                        <input type="text" name="marca" id="marca" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label class="m-0 font-weight-bold text-black" for="modelo">Modelo:</label>
                        <input type="text" name="modelo" id="modelo" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label class="m-0 font-weight-bold text-black" for="cor">Cor:</label>
                        <input type="text" name="cor" id="cor" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label class="m-0 font-weight-bold text-black" for="ano_fabricacao">Ano de Fabricação:</label>
                        <input type="number" name="ano_fabricacao" id="ano_fabricacao" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label class="m-0 font-weight-bold text-black" for="seguro">Seguro:</label>
                        <input type="date" name="seguro" id="seguro" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label class="m-0 font-weight-bold text-black" for="inspecao">Data de Inspeção:</label>
                        <input type="date" name="inspecao" id="inspecao" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label class="m-0 font-weight-bold text-black" for="documento">Documento:</label>
                        <input type="file" name="documento" id="documento" class="form-control" required>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Criar Viatura</button>
                </form>
                  <!-- ... -->

          </div>
      </div>
  </div>
</div>

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
