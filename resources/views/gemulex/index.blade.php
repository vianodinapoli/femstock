@extends('layouts.app')
@notifyCss

@section('content')



<div class="tabTitle">
<h2>PAIOL 04 DE GEMULEX</h2>
<hr>
<a href="{{route('home') }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>

<a href="{{ route('gemulex.create') }}" class="btn btn-primary">
  <i class="fas fa-pen-alt"></i>Adicionar Gemulex de 32, 50, 65 e 90
</a>

</div>
<div class="gemulex" style="text-align:right;" >
  <a  class="btn btn-primary btn-icon-split" style="margin-bottom: 10px">
    <span class="icon text-white-50">
        Caixas de 32
    </span>
    <span class="text">{{$quantidadeOne}}</span>
  </a>
  <a href="#" class="btn btn-danger btn-icon-split" style="margin-bottom: 10px">
    <span class="icon text-white-50">
        Caixas de 50
    </span>
    <span class="text">{{$quantidadeTwo}}</span>
  </a>
  
  <a href="#" class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
    <span class="icon text-white-50">
        Caixas de 65
    </span>
    <span class="text">{{$quantidadeSum}}</span>
  </a>
  <a href="#" class="btn btn-info btn-icon-split" style="margin-bottom: 10px">
    <span class="icon text-white-50">
        Caixas de 90
    </span>
    <span class="text">{{$quantidadeFour}}</span>
  </a>
  
  
</div>
<div class="card shadow mb-4">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="10">
    <thead>
      <tr>
        <th>#</th>
        <th>Descição/Diametro</th>
        <th>Data recebido</th>
        <th>Referência/Número de lote:</th>
        <th>Data de produção</th>
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
          align-items: flex-start;">
           <a href="{{ route('gemulex.edit', $gemulex->id) }}" class="btn btn-primary">
            <i class="fas fa-pencil-alt"></i> 
        </a>
             
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
</div>
  <x-notify::notify />
  @notifyJs
  </body>
@endsection
