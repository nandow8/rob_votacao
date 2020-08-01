@extends('layouts.app', [
    'parentSection' => 'dashboards',
    'elementName' => 'dashboard'
])

@section('content')
    @component('layouts.headers.auth') 
        @component('layouts.headers.breadcrumbs')
            @slot('title') 
                {{ __('') }} 
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/grafico') }}" title="Resultado"> Resultado </a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Resultado') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">Resultado 
                        <span class="float-right">
                            Data da enquete: {{ date("d/m/Y", strtotime($tituloEnquete->created_at))}} {{ date("G:i", strtotime($tituloEnquete->created_at))}}
                        </span>
                    </div>
                    <div class="card-body">
                        
                       {{$tituloEnquete->titulo}}
                       <br>
                       <br>
                       {{$tituloEnquete->descricao}}

                    </div>
                </div>
                <div>
                    <h3 style="margin-left: 45%;">{{ $resultados[0]->candidatos ?? null }}</h3>
                </div>
                <div id="piechart" style="width: 100%; height: 500px;"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header"> </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h1>Total: 0</h1>
                            </div>
                            <div class="col-6">
                                
                            </div>
                        </div>
                       
                       <br>
                       
                       

                    </div>
                </div>
                <div>
                    
                </div>
                
            </div>
        </div>
    </div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Ninguém votou',     10],
      
    ]);

    var options = {
      title: '{{ $tituloEnquete->titulo }}'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>
@endsection


  