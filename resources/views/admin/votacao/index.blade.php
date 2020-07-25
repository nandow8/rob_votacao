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
  input[type=radio] {
    width: 30px;
    height: 30px;
}
</style>
    <div class="container-fluid mt--6">
      <form action="{{ url('admin/votacao') }}" method="POST">
         @csrf 
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
                                              <input type="radio" name="atendecompra" value="{{$item->candidato_id}}" > 
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
                        </div>  
                          <input type="hidden" name="enquete_id" value="{{$enquetes[0]->enquete_id}}">
                            <div class="align-middle">
                              <button type="submit" style="width: 500px; margin-left: 30%;" class="btn btn-primary btn-lg">Votar</button>
                            </div>
                      </div>
                      
                </div>
            </div>
        </div>
      </form>
    </div>
@endsection
