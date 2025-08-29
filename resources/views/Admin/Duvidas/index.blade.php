@extends('Admin.Layout.index')

@section('title', 'Dúvidas')


@section('content')
<div class="main-content">
    <div class="dashboard-header">
        <h1 class="dashboard-title">Gerenciar Dúvidas</h1>
        <div>
            <a href="{{ route('duvidas.criar') }}" class="btn btn-sm btn-purple">
                <i class="fas fa-plus me-1"></i> Adicionar Dúvida
            </a>
        </div>
    </div>
    <div class="tab-pane fade show active" id="animals" role="tabpanel" aria-labelledby="animals-tab">
        <div class="content-card">
            <div class="content-card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="20">#</th>
                                <th scope="col" width="80">Titulo</th>
                                <th scope="col" width="150">Descrição</th>
                                <th scope="col" width="60">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($duvidas as $duvida)
                            <tr>
                                <td>{{ $duvida->id }}</td>
                                <td>{{ $duvida->titulo }}</td>
                                <td>{!! Str::limit(strip_tags($duvida->descricao), 150) !!}</td>
                                <td>
                                    <a href="{{ route('duvidas.editar', $duvida->id)}}" class="action-btn edit" title="Editar"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="action-btn delete" title="Excluir"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection