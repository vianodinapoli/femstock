@extends('layouts.app')

@section('content')



@if (session()->has('message'))
{{session()->get('message')}}

@endif
<a href="{{ url()->previous() }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> </a>


<a href="#" class="btn btn-secondary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-check"></i>
    </span>
    <span class="text">Adicionar Material</span>
</a>
<hr>
<form action="{{route('estoque.store')}}"  method="post">
    @csrf


    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="marca_destino">Marca/Destino:</label>
        <input type="text" name="marca_destino" id="marca_destino" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="referencia">Referência:</label>
        <input type="text" name="referencia" id="referencia" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="numero_lote">Descricao:</label>
        <input type="text" name="descricao"  id="descricao" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data">Data:</label>
        <input type="date" name="data"  id="data" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="pecas">Peças:</label>
        <input type="number" name="pecas"  id="pecas" class="form-control" required>
    </div>




    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data">Peças Entradas:</label>
        <input type="number" name="pecas_entradas" id="pecas_entradas" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data">Peças Saidas:</label>
        <input type="number" name="pecas_saidas" id="pecas_saidas" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data">Custo nitário:</label>
        <input type="number" name="custo_unitario" id="custo_unitario" class="form-control" required>
    </div>

    <div class="form-group">
        <label class="m-0 font-weight-bold text-black" for="data">Custo total:</label>
        <input type="number" name="custo_total" id="custo_total" class="form-control" >
    </div>


    

    


    <button type="submit" class=" btn btn-success mb-20 mb-20 float-right">Criar</button>
</form>

<script>
    // Assuming you have other input fields for quantity and unit price
const quantityInput = document.getElementById('quantity'); // Replace with your quantity input ID
const unitPriceInput = document.getElementById('unit_price'); // Replace with your unit price input ID
const custoTotalInput = document.getElementById('custo_total');

function updateCustoTotal() {
  const quantity = parseFloat(quantityInput.value) || 0;
  const unitPrice = parseFloat(unitPriceInput.value) || 0;
  const custoTotal = quantity * unitPrice;
  custoTotalInput.value = custoTotal.toFixed(2);
}

// Update on change of quantity or unit price
quantityInput.addEventListener('change', updateCustoTotal);
unitPriceInput.addEventListener('change', updateCustoTotal);

// Initial update (optional, if values are available on page load)
updateCustoTotal();
</script>
@endsection
