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
            <li class="breadcrumb-item active" aria-current="page">{{ __('Candidato') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">Candidato</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/candidato/create') }}" class="btn btn-success btn-sm" title="Adicionar">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar
                        </a>

                        <form method="GET" action="{{ url('/admin/candidato') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th>Ferramentas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($candidato as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nome }}</td>
                                        <td>{{ $item->descricao }}</td>
                                        <td>
                                            <a href="{{ url('/admin/candidato/' . $item->id) }}" title="Visualizar Candidato"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/candidato/' . $item->id . '/edit') }}" title="Editar Candidato"><button class="btn btn-primary btn-sm"><i class="fas fa-edit" aria-hidden="true"></i></button></a>
                                            <button type="submit" data-id="{{$item->id}}" data-route="/admin/candidato" class="btnDeletar btn btn-danger btn-sm" title="Deletar Candidato"><i class="fa fa-trash" aria-hidden="true"></i></button>                               
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $candidato->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
