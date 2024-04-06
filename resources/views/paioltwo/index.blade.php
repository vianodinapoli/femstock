@extends('layouts.app')
@notifyCss

@section('content')



<div class="tabTitle">
<h2>PAIOL 02</h2>
<hr>
<a href="{{route('home') }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>

<a href="{{ route('paioltwo.create') }}" class="btn btn-success float-right">
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
        <th>Data recebido</th>
        <th>Referência/Número de lote:</th>
        <th>Data de produção</th>
        <th>Data de validade</th>
        <th>Quantidade</th>

        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($paioltwos as $paioltwo)
      
        <tr>
          <td>{{ $paioltwo->id }}</td>
          <td>{{ $paioltwo->descricao }}</td>
          <td>{{ $paioltwo->data_recebido }}</td>
          <td>{{ $paioltwo->numero_lote }}</td>
          <td>{{ $paioltwo->data_producao }}</td>
          <td>{{ $paioltwo->data_validade }}</td>
          <td>{{ $paioltwo->quantidade }}</td>
          
          <td style="
          display: flex;
          justify-content: space-evenly;
          align-items: flex-start;">
           <a href="{{ route('paioltwo.edit', $paioltwo->id) }}" class="btn btn-primary">
            <i class="fa-regular fa-pen-to-square"></i> 
        </a>
             
            <form action="{{route('paioltwo.destroy',['paioltwo' => $paioltwo->id])}}" method="post">
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
