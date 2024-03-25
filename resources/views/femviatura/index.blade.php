@extends('layouts.app')

@section('content')


{{-- @notifyCss --}}


<h2>CCONTROLE DE DOCUMENTOS DE VIATURAS - FEM</h2>

<button type="submit" class="btn btn-success" ><a style="color: #fff" href="{{route('femviatura.create')}}">Adicionar Viaturas</a></button>



<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>#</th>
        <th>Marca</th>
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
          <td>{{ $femviaturas->id }}</td>
           <td>{{ $femviaturas->marca }}</td>
          <td>{{ $femviaturas->modelo }}</td>
          <td>{{ $femviaturas->cor }}</td>
          <td>{{ $femviaturas->ano_fabricacao }}</td>
          <td>{{ $femviaturas->seguro }}</td>
          <td>{{ $femviaturas->inspecao }}</td> 
          <td><a href="{{ url('documentos/' . $femviatura->documento) }}">Download</a></td>
          
          <td style="
          display: flex;
          justify-content: space-evenly;
          align-items: center;">
           {{-- <a href="{{ route('femviaturas.edit', $femviaturas->id) }}" class="btn btn-primary"> --}}
            <i class="fas fa-pencil-alt"></i> Editar
        </a>
             | 
            {{-- <a href="{{ route('users.destroy', $user->id) }}" onclick="event.preventDefault(); confirm('Deseja realmente excluir este usuário?') && this.submit();">Excluir</a> --}}
            {{-- <form action="{{route('femviaturas.destroy',['gemulex' => $femviaturas->id])}}" method="post"> --}}
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
