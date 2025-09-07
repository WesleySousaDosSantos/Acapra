@extends('Admin.Layout.index')

@section('title', 'Animais')

@section('content')
<div class="main-content">
    <div class="dashboard-header">
        <h1 class="dashboard-title">Gerenciar Animais</h1>
        <div class="dashboard-actions">
            <a href="{{ Route('animais.criar') }}" class="btn btn-purple">
                <i class="fas fa-plus me-2"></i> Novo Animal
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
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="80">Foto</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Espécie</th>
                                <th scope="col">Raça</th>
                                <th scope="col">Idade</th>
                                <th scope="col">Gênero</th>
                                <th scope="col">Status</th>
                                <th scope="col" width="120">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($animais as $animal )
                            <tr>
                                <td>{{ $animal->id }}</td>
                                <td><img src="{{ asset('Imagem_animal/' . $animal->imagem) }}" alt="{{ $animal->nome }}" class="pet-img"></td>
                                <td>{{ $animal->nome }}</td>
                                <td>{{ $animal->especie }}</td>
                                <td>{{ $animal->raca }}</td>
                                <td>{{ $animal->idade }}</td>
                                <td>{{ $animal->genero }}</td>
                                <td><span class="status-badge available">{{ $animal->status }}</span></td>
                                <td>
                                    <a href="#" class="action-btn edit" title="Editar"><i
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
            <div class="content-card-footer d-flex justify-content-between align-items-center">
                <div>
                    Mostrando {{ $animais->firstItem() }} até {{ $animais->lastItem() }}
                </div>
                <nav aria-label="Page navigation">
                    {{ $animais->links('pagination::bootstrap-5') }}
                </nav>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
<script>

</script>
@endsection