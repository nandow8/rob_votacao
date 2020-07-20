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
            <li class="breadcrumb-item active" aria-current="page">{{ __('Votacao') }}</li>
        @endcomponent
    @endcomponent
<style>
  .custom-control-lg .custom-control-label::before,
.custom-control-lg .custom-control-label::after {
    top: 0.1rem !important;
    left: -2rem !important;
    width: 3.25rem !important;
    height: 3.25rem !important;
}

.custom-control-lg .custom-control-label {
    margin-left: 0.5rem !important;
    font-size: 1rem !important;
}
</style>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">Votacao</div>
                    <div class="card-body">
                        

                        <br/>
                        <br/>
                        
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header">
                              <div class="row align-items-center">
                                <div class="col-8">
                                  <!-- Title -->
                                <h5 class="h3 mb-0">{{ $enquetes[0]->titulo }}</h5>
                                </div>
                                <div class="col-4 text-right">
                                  {{-- <a href="#!" class="btn btn-sm btn-neutral">Action</a> --}}
                                </div>
                              </div>
                            </div>
                            <!-- Card image -->
                            <!-- List group -->
                            <!-- Card body -->
                            <div class="card-body">
                              <p class="card-text mb-4">
                                  {{$enquetes[0]->enquete_descricao}}
                              </p>
                              
                            </div>
                          </div>

                        <div class="row">
                          @foreach ($enquetes as $item)
                            <div class="col-6">
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header">
                                      <div class="row align-items-center">
                                        <div class="col-8">
                                          <!-- Title -->
                                        <h5 class="h3 mb-0"> </h5>
                                        <div class="row">
                                          <div class="col-4">
                                            <h5 class="h3 mb-0">{{ $item->nome }}</h5>
                                          </div>
                                          <div class="col-3">
                                            <div class="custom-control-lg custom-control custom-checkbox">
                                              <input class="custom-control-input" name="abstencao[]" value="candidato" id="checkbox-large" type="radio"/>
                                              <label class="custom-control-label" for="checkbox-large">
                                              </label>
                                          </div>
                                        </div>
                                      </div>
                                        </div>
                                        <div class="col-4 text-right">
                                          {{-- <a href="#!" class="btn btn-sm btn-neutral">Action</a> --}}
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Card image -->
                                    <!-- List group -->
                                    <!-- Card body -->
                                    <div class="card-body">
                                      <p class="card-text mb-4">
                                          {{$item->candidatos_descricao}}
                                      </p>
                                      
                                    </div>
                                  </div>
                            </div>  
                          @endforeach
                          <div class="col-6">
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header">
                                  <div class="row align-items-center">
                                    <div class="col-8">
                                      <!-- Title -->
                                      <div class="row">
                                          <div class="col-4">
                                            <h5 class="h3 mb-0">ABSTENÇÃO</h5>
                                          </div>
                                          <div class="col-3">
                                            <div class="custom-control-lg custom-control custom-checkbox">
                                              <input class="custom-control-input" name="abstencao[]" value="abstencao" id="checkbox-large" type="radio"/>
                                              <label class="custom-control-label" for="checkbox-large">
                                              </label>
                                          </div>
                                        </div>
                                      </div>
                                      
                                    
                                    </div>
                                    <div class="col-4 text-right">
                                      {{-- <a href="#!" class="btn btn-sm btn-neutral">Action</a> --}}
                                    </div>
                                  </div>
                                </div>
                                <!-- Card image -->
                                <!-- List group -->
                                <!-- Card body -->
                                <div class="card-body">
                                  
                                  
                                </div>
                              </div>
                        </div>  
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
