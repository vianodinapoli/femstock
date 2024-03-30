@extends('layouts.app')
@notifyCss

@section('content')


<div class="tabTitle">


<h2>CONTROLE DE DOCUMENTOS DE VIATURAS - FEM</h2>
<hr>
<a href="{{ url()->previous() }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>
<a href="{{ route('femviatura.create') }}" class="btn btn-primary">
  <i class="fas fa-pen-alt"></i> Adicionar Viatura
</a>
</div>
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

             <a href="{{ asset('/documentos/' . $femviatura->documento) }}" target="_blank">
              <img src="{{ asset('/documentos/' . $femviatura->documento) }}" target="_blank" width="0px">
              <a href="{{ route('femviatura.create') }}" class="btn btn-primary">
                <i class="fas fa-download"></i> Baixar PDF
              </a>
          </a>
            </td>
              
          
          <td class="acao">
           <a href="{{ route('femviatura.edit', $femviatura->id) }}" class="btn btn-primary">
            <i class="fas fa-pencil-alt"></i>   
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
