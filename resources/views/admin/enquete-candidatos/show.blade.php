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
            <li class="breadcrumb-item"><a href="{{ url('/admin/enquete-candidatos') }}" title="Enquetecandidatos"> Enquetecandidatos </a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Visualizar Enquetecandidatos ID ' . $enquetecandidato->id) }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">EnqueteCandidato </div>
                    <div class="card-body">

                        {{-- <a href="{{ url('/admin/enquete-candidatos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a> --}}
                        
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    {{-- 
                                        <tr>
                                            <th>ID</th><td>{{ $enquetecandidato->id }}</td>
                                        </tr>
                                    --}}
                                    <tr><th> Candidato Id </th><td> {{ $enquetecandidato->candidato_id }} </td></tr><tr><th> Enquete Id </th><td> {{ $enquetecandidato->enquete_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
