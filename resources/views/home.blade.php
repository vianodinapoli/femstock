@extends('layouts.app')
@section('content')
    <div class="row">
        {{-- <h2>Dashboard</h2> --}}

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Usuários no sistema</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800"><a
                                    href="{{ route('users.index') }}">USUÁRIOS</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                PAIOL 4</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-600"><a
                                    href="{{ route('gemulex.index') }}">GEMULEX</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">FÁBRICA DE ANFO
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800"><a
                                            href="{{ route('anfo.index') }}"> VER DINAMITE ANCO</a></div>
                                </div>
                                <div class="col">

                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                MAIS ACESSÓRIOS DE TIRO</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800"><a href="">VER MAIS ACESSÓRIOS</a>
                            </div>
                        </div>
                        <div class="col-auto">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Lotes disponíveis de Gemulex</h6>
                    
                    {{-- <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> --}}
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                  
                </div>

<div class="gemulex" >
    <a  class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
      <span class="icon text-white-50">
          32X270
      </span>
      <span class="text">{{$quantidadeOne}}</span>
    </a>
    <a  class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
      <span class="icon text-white-50">
          50X550
      </span>
      <span class="text">{{$quantidadeTwo}}</span>
    </a>
    
    <a  class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
      <span class="icon text-white-50">
          65X550
      </span>
      <span class="text">{{$quantidadeSum}}</span>
    </a>
    <a  class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
      <span class="icon text-white-50">
         90X550
      </span>
      <span class="text">{{$quantidadeFour}}</span>
    </a>
    
    
  </div>
            </div>

        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Lotes disponíveis de Anfo</h6>
                    {{-- <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> --}}
                </div>
                <!-- Card Body -->
                <div class="card-body card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="doughnutCanvas"></canvas>
                    </div>
                    {{-- <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> 23022024
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> 30022024
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> 03032024
                    </span>
                </div> --}}
                </div>
                <div style="  text-align: center; margin-top: 10px;">
                    <a  class="btn btn-info btn-icon-split" style="margin-bottom: 10px">
                      <span class="icon text-white-50">
                          Total de Anfo
                      </span>
                      <span class="text">{{$quantidadeAnfos}}</span>
                    </a>
                    </div>
            </div>
        </div>
        
    </div>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [{
                    label: 'Gemulex',
                    data: {!! json_encode($quantidade) !!},
                    backgroundColor: 'rgba(54, 162, 235)', // Use uma cor padrão
                    borderColor: 'rgba(4, 22, 235, 0.2)',
                    backgroundColor: [
            'rgba(255, 99, 132, 0.8)',
            'rgba(54, 162, 235, 0.8)',
            'rgba(255, 206, 86, 0.8)',
            'rgba(75, 192, 192, 0.8)',
            'rgba(153, 102, 255, 0.8)',
            'rgba(255, 159, 64, 0.8)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
                    borderWidth: 2
                }]

            },
            options: {
                scales: {
                    y: {
                        type: 'linear', // Tipo da escala Y
                        min: 0, // Valor mínimo
                        max: 1200, // Valor máximo
                    }
                }
            }
        });




        const doughnutData = {
    labels: {!! json_encode($labelsAnfo) !!},
    datasets: [{
        data: {!! json_encode($quantidadeAnfo) !!},
        backgroundColor: [
            'rgba(255, 99, 132, 0.8)',
            'rgba(54, 162, 235, 0.8)',
            'rgba(255, 206, 86, 0.8)',
            'rgba(75, 192, 192, 0.8)',
            'rgba(153, 102, 255, 0.8)',
            'rgba(255, 159, 64, 0.8)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 2
    }]
};

const doughnutOptions = {
    responsive: true,
    maintainAspectRatio: false, // Permitir que o gráfico redimensione sem manter a proporção
    legend: {
        position: 'bottom', // Posição da legenda
        labels: {
            fontColor: '#333', // Cor do texto da legenda
            fontSize: 10 // Tamanho do texto da legenda
        }
    }
};

const doughnutChart = new Chart('doughnutCanvas', {
    type: 'doughnut',
    data: doughnutData,
    options: doughnutOptions
});

    </script>
@endsection
