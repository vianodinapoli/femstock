@extends('layouts.app')
@notifyCss

@section('content')



<div class="tabTitle">
<h2>PAIOL 03</h2>
<hr>
<a href="{{route('home') }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>

<a href="{{ route('paiolthree.create') }}" class="btn btn-primary">
  <i class="fas fa-pen-alt"></i>Adicionar Material
</a>

</div>


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
      @foreach ($paiolthrees as $paiolthree)
      
        <tr>
          <td>{{ $paiolthree->id }}</td>
          <td>{{ $paiolthree->descricao }}</td>
          <td>{{ $paiolthree->data_recebido }}</td>
          <td>{{ $paiolthree->numero_lote }}</td>
          <td>{{ $paiolthree->data_producao }}</td>
          <td>{{ $paiolthree->data_validade }}</td>
          <td>{{ $paiolthree->quantidade }}</td>
          
          <td style="
          display: flex;
          justify-content: space-evenly;
          align-items: flex-start;">
           <a href="{{ route('paiolthree.edit', $paiolthree->id) }}" class="btn btn-primary">
            <i class="fas fa-pencil-alt"></i> 
        </a>
             
            <form action="{{route('paiolthree.destroy',['paiolthree' => $paiolthree->id])}}" method="post">
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
