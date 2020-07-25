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
            <li class="breadcrumb-item active" aria-current="page">{{ __('Resultados') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">Resultados</div>
                    <form action="{{ url('resultados') }}" method="GET">
                        <div class="card-body">
                            <div class="form-group {{ $errors->has('enquetes') ? 'has-error' : ''}}">
                                <label for="enquetes" class="control-label">{{ 'Category' }}</label>
                                <select name="enquetes" class="form-control" id="enquetes" >
                                @foreach ($enquetes as $optionKey => $optionValue)
                                    <option value="{{ $optionValue->id }}" {{ (isset($post->enquetes) && $post->enquetes == $optionKey) ? 'selected' : ''}}>{{ $optionValue->titulo }}</option>
                                @endforeach
                            </select>
                                {!! $errors->first('enquetes', '<p class="help-block">:message</p>') !!}
                            </div>
                            
                            <div class="align-middle">
                                <button type="submit" style="width: 500px; margin-left: 30%;" class="btn btn-primary btn-lg">Visualizar Resultado</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

 

