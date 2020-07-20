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
            <li class="breadcrumb-item"><a href="{{ url('/admin/enquete') }}" title="Enquete"> Enquete </a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Visualizar Enquete ID ' . $enquete->id) }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">Enquete </div>
                    <div class="card-body">

                        {{-- <a href="{{ url('/admin/enquete') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a> --}}
                        
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    {{-- 
                                        <tr>
                                            <th>ID</th><td>{{ $enquete->id }}</td>
                                        </tr>
                                    --}}
                                    <tr><th> Titulo </th><td> {{ $enquete->titulo }} </td></tr><tr><th> Descricao </th><td> {{ $enquete->descricao }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
