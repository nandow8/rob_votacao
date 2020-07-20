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

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">Votacao</div>
                    <div class="card-body">
                    

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

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
                            <form method="POST" action="{{ url('/admin/votacao/sim') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                
                                    <input type="hidden" name="enquete_id" value="{{$enquetes[0]->enquete_id}}">
                                    <input type="hidden" name="candidato_id" value="{{$enquetes[0]->candidato_id}}">
                                    
                                    <div class="col-4 ">
                                        <button type="submit" class="btn btn-primary">Sim</button>
                                    </div>  
                            </form>

                            <form method="POST" action="{{ url('/admin/votacao/nao') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="enquete_id" value="{{$enquetes[0]->enquete_id}}">
                                    <input type="hidden" name="candidato_id" value="{{$enquetes[0]->candidato_id}}">
                                    <div class="col-4 ">
                                        <button class="btn btn-warning">Não</button>
                                    </div>  
                            </form>  

                            <form method="POST" action="{{ url('/admin/votacao/abstencao') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="enquete_id" value="{{$enquetes[0]->enquete_id}}">
                                    <input type="hidden" name="candidato_id" value="{{$enquetes[0]->candidato_id}}">
                                    <div class="col-4 ">
                                        <button class="btn btn-default">Abstenção</button>
                                    </div>  
                            </form>  
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
