@extends('layouts.app')
@notifyCss

@section('content')


<div class="tabTitle">


<h2>CONTROLE DE DOCUMENTOS DE VIATURAS - FEM</h2>
<hr>
<a href="{{route('home') }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>
<a href="{{ route('extintor.create') }}" class="btn btn-primary">
  <i class="fas fa-pen-alt"></i> Adicionar Extintor
</a>
</div>
<div class="card shadow mb-4">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>#</th>
        <th>Numero ou descrição</th>
        <th>agente </th>
        <th>peso</th>
        <th>localizacao</th>
        <th>verificado</th>
        <th>proxima_ver</th>

        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
       @foreach ($extintores as $extintor) 
      
        <tr>
          <td>{{ $extintor->id }}</td>
           <td>{{ $extintor->numero }}</td>
          <td>{{ $extintor->agente }}</td>
          <td>{{ $extintor->peso }}</td>
          <td>{{ $extintor->localizacao }}</td>
          <td>{{ $extintor->verificado }}</td>
          <td>{{ $extintor->proxima_ver }}</td> 
          
              
          
          <td class="acao">
           <a href="{{ route('extintor.edit', $extintor->id) }}" class="btn btn-primary">
            <i class="fas fa-pencil-alt"></i>   
        </a>

        
             
            {{-- <a href="{{ route('extintor.destroy', $extintor->id) }}">Excluir</a> --}}
            <form action="{{route('extintor.destroy',['extintor' => $extintor->id])}}" method="post">
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
