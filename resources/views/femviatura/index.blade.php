@extends('layouts.app')
@notifyCss

@section('content')


<div class="tabTitle">


<h4>Controle de documentos de Viaturas</h4>
<hr>
<a href="{{route('home') }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>
<a href="{{ route('femviatura.create') }}" class="btn btn-success mb-20 mb-20 float-right">
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

        
             
            {{-- <a href="{{ route('femviatura.destroy', $femviatura->id) }}">Excluir</a> --}}
            <form action="{{route('femviatura.destroy',['femviatura' => $femviatura->id])}}" method="post">
                @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
