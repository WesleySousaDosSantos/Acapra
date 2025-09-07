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
                            <tr>
                                <td>1</td>
                                <td><img src="/placeholder.svg?height=50&width=50" alt="Luna"
                                        class="pet-img"></td>
                                <td>Luna</td>
                                <td>Cachorro</td>
                                <td>Labrador</td>
                                <td>2 anos</td>
                                <td>Fêmea</td>
                                <td><span class="status-badge available">Disponível</span></td>
                                <td>
                                    <a href="#" class="action-btn edit" title="Editar"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="action-btn delete" title="Excluir"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="/placeholder.svg?height=50&width=50" alt="Cooper"
                                        class="pet-img"></td>
                                <td>Cooper</td>
                                <td>Cachorro</td>
                                <td>Golden Retriever</td>
                                <td>3 anos</td>
                                <td>Macho</td>
                                <td><span class="status-badge pending">Processo de Adoção</span></td>
                                <td>
                                    <a href="#" class="action-btn edit" title="Editar"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="action-btn delete" title="Excluir"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="/placeholder.svg?height=50&width=50" alt="Mia"
                                        class="pet-img"></td>
                                <td>Mia</td>
                                <td>Gato</td>
                                <td>Siamês</td>
                                <td>1 ano</td>
                                <td>Fêmea</td>
                                <td><span class="status-badge adopted">Adotado</span></td>
                                <td>
                                    <a href="#" class="action-btn edit" title="Editar"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="action-btn delete" title="Excluir"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="/placeholder.svg?height=50&width=50" alt="Max"
                                        class="pet-img"></td>
                                <td>Max</td>
                                <td>Cachorro</td>
                                <td>Pinscher</td>
                                <td>4 anos</td>
                                <td>Macho</td>
                                <td><span class="status-badge available">Disponível</span></td>
                                <td>
                                    <a href="#" class="action-btn edit" title="Editar"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="action-btn delete" title="Excluir"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="/placeholder.svg?height=50&width=50" alt="Bella"
                                        class="pet-img"></td>
                                <td>Bella</td>
                                <td>Cachorro</td>
                                <td>Poodle</td>
                                <td>2 anos</td>
                                <td>Fêmea</td>
                                <td><span class="status-badge available">Disponível</span></td>
                                <td>
                                    <a href="#" class="action-btn edit" title="Editar"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="action-btn delete" title="Excluir"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><img src="/placeholder.svg?height=50&width=50" alt="Bella"
                                        class="pet-img"></td>
                                <td>Bella</td>
                                <td>Cachorro</td>
                                <td>Poodle</td>
                                <td>2 anos</td>
                                <td>Fêmea</td>
                                <td><span class="status-badge available">Disponível</span></td>
                                <td>
                                    <a href="#" class="action-btn edit" title="Editar"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="action-btn delete" title="Excluir"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><img src="/placeholder.svg?height=50&width=50" alt="Bella"
                                        class="pet-img"></td>
                                <td>Bella</td>
                                <td>Cachorro</td>
                                <td>Poodle</td>
                                <td>2 anos</td>
                                <td>Fêmea</td>
                                <td><span class="status-badge available">Disponível</span></td>
                                <td>
                                    <a href="#" class="action-btn edit" title="Editar"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="action-btn delete" title="Excluir"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><img src="/placeholder.svg?height=50&width=50" alt="Bella"
                                        class="pet-img"></td>
                                <td>Bella</td>
                                <td>Cachorro</td>
                                <td>Poodle</td>
                                <td>2 anos</td>
                                <td>Fêmea</td>
                                <td><span class="status-badge available">Disponível</span></td>
                                <td>
                                    <a href="#" class="action-btn edit" title="Editar"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="action-btn delete" title="Excluir"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="content-card-footer">
                <div>Mostrando 5 de 24 animais</div>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Próximo</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection