@extends('Admin.Layout.index')

@section('title', 'Dashboard')


@section('content')
<div class="main-content">
    <div class="dashboard-header">
        <h1 class="dashboard-title">Dashboard Administrativo</h1>
    </div>

    <div class="stats-container">
        <div class="stat-card">
            <div class="stat-icon purple">
                <i class="fas fa-dog"></i>
            </div>
            <div class="stat-info">
                <div class="stat-value">24</div>
                <div class="stat-label">Animais para Adoção</div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon blue">
                <i class="fas fa-file-alt"></i>
            </div>
            <div class="stat-info">
                <div class="stat-value">12</div>
                <div class="stat-label">Formulários Pendentes</div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon green">
                <i class="fas fa-home"></i>
            </div>
            <div class="stat-info">
                <div class="stat-value">156</div>
                <div class="stat-label">Adoções Realizadas</div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon orange">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="stat-info">
                <div class="stat-value">8</div>
                <div class="stat-label">Novas Mensagens</div>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs" id="dashboardTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="animals-tab" data-bs-toggle="tab" data-bs-target="#animals"
                type="button" role="tab" aria-controls="animals" aria-selected="true">
                Animais para Adoção
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="forms-tab" data-bs-toggle="tab" data-bs-target="#forms" type="button"
                role="tab" aria-controls="forms" aria-selected="false">
                Formulários de Adoção
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
                type="button" role="tab" aria-controls="messages" aria-selected="false">
                Mensagens de Contato
            </button>
        </li>
    </ul>

    <div class="tab-content" id="dashboardTabsContent">
        <div class="tab-pane fade show active" id="animals" role="tabpanel" aria-labelledby="animals-tab">
            <div class="content-card">
                <div class="content-card-header">
                    <h5 class="content-card-title">Gerenciar Animais</h5>
                    <div>
                        <button class="btn btn-sm btn-purple">
                            <i class="fas fa-plus me-1"></i> Adicionar Animal
                        </button>
                    </div>
                </div>
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

        <div class="tab-pane fade" id="forms" role="tabpanel" aria-labelledby="forms-tab">
            <div class="content-card">
                <div class="content-card-header">
                    <h5 class="content-card-title">Formulários de Adoção Recebidos</h5>
                </div>
                <div class="content-card-body p-0">
                    <div class="row g-0">
                        <div class="col-md-4 border-end">
                            <div class="adoption-form-preview new">
                                <div class="applicant-info">
                                    <div class="applicant-name">
                                        <span class="unread-badge"></span> João Silva
                                    </div>
                                    <div class="form-date">Hoje, 14:30</div>
                                </div>
                                <div class="pet-name">Para: Luna (Labrador, Fêmea)</div>
                                <span class="form-status new">Novo</span>
                            </div>

                            <div class="adoption-form-preview">
                                <div class="applicant-info">
                                    <div class="applicant-name">Maria Oliveira</div>
                                    <div class="form-date">Ontem, 09:15</div>
                                </div>
                                <div class="pet-name">Para: Cooper (Golden, Macho)</div>
                                <span class="form-status reviewing">Pendente</span>
                            </div>

                            <div class="adoption-form-preview">
                                <div class="applicant-info">
                                    <div class="applicant-name">Pedro Santos</div>
                                    <div class="form-date">22/04/2025</div>
                                </div>
                                <div class="pet-name">Para: Bella (Poodle, Fêmea)</div>
                                <span class="form-status approved">Aprovado</span>
                            </div>

                            <div class="adoption-form-preview">
                                <div class="applicant-info">
                                    <div class="applicant-name">Ana Costa</div>
                                    <div class="form-date">20/04/2025</div>
                                </div>
                                <div class="pet-name">Para: Max (Pinscher, Macho)</div>
                                <span class="form-status rejected">Rejeitado</span>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="p-4">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4>Detalhes do Formulário de Adoção</h4>
                                    <div class="form-status new">Novo</div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <h5 class="mb-3">Informações do Solicitante</h5>
                                        <p><strong>Nome:</strong> João Silva</p>
                                        <p><strong>Email:</strong> joao.silva@email.com</p>
                                        <p><strong>Telefone:</strong> (11) 98765-4321</p>
                                        <p><strong>Idade:</strong> 32 anos</p>
                                        <p><strong>Renda:</strong> R$ 3.001 a R$ 5.000</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="mb-3">Informações do Animal</h5>
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="/placeholder.svg?height=80&width=80" alt="Luna"
                                                class="rounded-circle me-3" width="80" height="80">
                                            <div>
                                                <h5 class="mb-1">Luna</h5>
                                                <p class="mb-0 text-muted">Labrador, Fêmea, 2 anos</p>
                                            </div>
                                        </div>
                                        <p><strong>ID do Animal:</strong> #A001</p>
                                        <p><strong>Status:</strong> Disponível para Adoção</p>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h5 class="mb-3">Informações de Residência</h5>
                                    <p><strong>Endereço:</strong> Rua das Flores, 123, Apto 45, Jardim
                                        Primavera, São Paulo - SP, CEP 01234-567</p>
                                    <p><strong>Tipo de Residência:</strong> Apartamento</p>
                                    <p><strong>Propriedade:</strong> Própria</p>
                                    <p><strong>Espaço para o Animal:</strong> O animal ficará dentro do
                                        apartamento, que tem 80m² e uma varanda fechada com tela. Temos um
                                        espaço reservado para ele com cama e brinquedos.</p>
                                    <p><strong>Todos Concordam com a Adoção:</strong> Sim</p>
                                </div>

                                <div class="mb-4">
                                    <h5 class="mb-3">Informações sobre Outros Animais</h5>
                                    <p><strong>Possui Outros Animais:</strong> Sim</p>
                                    <p><strong>Quais:</strong> 1 gato (3 anos)</p>
                                    <p><strong>São Castrados e Vacinados:</strong> Sim</p>
                                    <p><strong>Concorda com Castração e Vacinação:</strong> Sim</p>
                                </div>

                                <div class="mb-4">
                                    <h5 class="mb-3">Termos e Condições</h5>
                                    <p><i class="fas fa-check-circle text-success me-2"></i> Concordou com os
                                        termos de adoção</p>
                                    <p><i class="fas fa-check-circle text-success me-2"></i> Concordou em
                                        receber visitas de acompanhamento</p>
                                    <p><i class="fas fa-check-circle text-success me-2"></i> Deseja receber
                                        notícias da ACAPRA</p>
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <button class="btn btn-outline-danger">
                                        <i class="fas fa-times me-2"></i> Rejeitar
                                    </button>
                                    <button class="btn btn-success">
                                        <i class="fas fa-check me-2"></i> Aprovar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <div class="content-card">
                <div class="content-card-header">
                    <h5 class="content-card-title">Mensagens de Contato</h5>

                </div>
                <div class="content-card-body p-0">
                    <div class="row g-0">
                        <div class="col-md-4 border-end">
                            <div class="message-preview unread">
                                <div class="sender-info">
                                    <div class="sender-name">
                                        <span class="unread-badge"></span> Carlos Mendes
                                    </div>
                                    <div class="message-date">Hoje, 15:45</div>
                                </div>
                                <div class="message-subject">Dúvidas sobre adoção</div>
                                <div class="message-excerpt">Olá, gostaria de saber quais são os requisitos para
                                    adotar um cachorro...</div>
                            </div>

                            <div class="message-preview unread">
                                <div class="sender-info">
                                    <div class="sender-name">
                                        <span class="unread-badge"></span> Fernanda Lima
                                    </div>
                                    <div class="message-date">Hoje, 11:20</div>
                                </div>
                                <div class="message-subject">Interesse em voluntariado</div>
                                <div class="message-excerpt">Bom dia! Tenho interesse em ser voluntária na
                                    ACAPRA. Como posso...</div>
                            </div>

                            <div class="message-preview">
                                <div class="sender-info">
                                    <div class="sender-name">Ricardo Souza</div>
                                    <div class="message-date">Ontem, 16:30</div>
                                </div>
                                <div class="message-subject">Doação de ração</div>
                                <div class="message-excerpt">Olá, gostaria de fazer uma doação de ração para os
                                    animais. Qual o...</div>
                            </div>

                            <div class="message-preview">
                                <div class="sender-info">
                                    <div class="sender-name">Amanda Rodrigues</div>
                                    <div class="message-date">21/04/2025</div>
                                </div>
                                <div class="message-subject">Agradecimento</div>
                                <div class="message-excerpt">Quero agradecer a toda equipe da ACAPRA pelo
                                    excelente trabalho...</div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="message-detail">
                                <div class="message-header">
                                    <div class="message-subject">Dúvidas sobre adoção</div>
                                    <div class="message-meta">
                                        <div class="message-sender">De: Carlos Mendes (carlos.mendes@email.com)
                                        </div>
                                        <div class="message-date">Hoje, 15:45</div>
                                    </div>
                                    <div class="message-meta">
                                        <div>Telefone: (11) 97654-3210</div>
                                        <div>Assunto: Adoção de Animal</div>
                                    </div>
                                </div>

                                <div class="message-content">
                                    <p>Olá,</p>
                                    <p>Gostaria de saber quais são os requisitos para adotar um cachorro da
                                        ACAPRA. Estou interessado especificamente na Luna, que vi no site.</p>
                                    <p>Moro em um apartamento, mas tenho um espaço adequado para um cachorro de
                                        porte médio. Trabalho em casa, então posso dar atenção ao animal durante
                                        todo o dia.</p>
                                    <p>Também gostaria de saber se há alguma taxa para adoção e quais documentos
                                        preciso apresentar.</p>
                                    <p>Desde já agradeço pela atenção.</p>
                                    <p>Atenciosamente,<br>Carlos Mendes</p>
                                </div>

                                <div class="message-actions">
                                    <button class="btn btn-outline-danger">
                                        <i class="fas fa-trash me-2"></i> Excluir
                                    </button>
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
