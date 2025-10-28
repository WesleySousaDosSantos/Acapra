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
                <div class="stat-value">{{ $animaldisponivel }}</div>
                <div class="stat-label">Animais para Adoção</div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon blue">
                <i class="fas fa-file-alt"></i>
            </div>
            <div class="stat-info">
                <div class="stat-value">{{ $formulariopendetes }}</div>
                <div class="stat-label">Formulários Pendentes</div>
            </div>
        </div>


        <div class="stat-card">
            <div class="stat-icon orange">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="stat-info">
                <div class="stat-value">{{ $mesagemhoje }}</div>
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
                        <a class="btn btn-sm btn-purple" href="{{ Route('dashboard.animalCreate') }}">
                            <i class="fas fa-plus me-1"></i> Adicionar Animal
                        </a>
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
                                @foreach ($animais as $animal)
                                <tr>
                                    <td>{{ $animal->id }}</td>
                                    <td><img src="{{ asset('Imagem_animal/' . $animal->imagem) }}" alt="{{ $animal->nome }}" class="pet-img"></td>
                                    <td>{{ $animal->nome }}</td>
                                    <td>{{ $animal->especie }}</td>
                                    <td>{{ $animal->idade }}</td>
                                    <td>{{ $animal->idade }}</td>
                                    <td>{{ $animal->especie }}</td>
                                    <td><span class="status-badge available">Disponível</span></td>
                                    <td>
                                        <a href="{{ Route('dashboard.animalEditar', $animal->id) }}" class="action-btn edit" title="Editar"><i
                                                class="fas fa-edit"></i></a>
                                        <form id="delete-form-{{ $animal->id }}" action="{{ route('dashboard.animal.delete', $animal->id) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <a type="button" class="action-btn delete"
                                                data-id="{{ $animal->id }}"><i class="fas fa-trash"></i></a>
                                        </form>
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

        <div class="tab-pane fade" id="forms" role="tabpanel" aria-labelledby="forms-tab">
            <div class="content-card">
                <div class="content-card-header">
                    <h5 class="content-card-title">Formulários de Adoção Recebidos</h5>
                </div>
                <div class="content-card-message-formulario">
                    <div class="content-message-formulario">
                        @foreach ($pendentes as $formulario)
                        <a href="{{ Route('dashboard.formulario.show', $formulario->id) }}"
                            class="adoption-form-preview {{ $formularioselecionado && $formulario->id == $formularioselecionado->id ? 'new' : '' }}">
                            <div class="applicant-info">
                                <div class="applicant-name">
                                    <span class="unread-badge"></span> {{ $formulario->name }}
                                </div>
                                <div class="form-date">{{$formulario->dataformatada}}</div>
                            </div>
                            <div class="pet-name">Para: {{ $formulario->animal->nome }}</div>
                            <span class="form-status reviewing">{{ $formulario->status }}</span>
                        </a>
                        @endforeach
                    </div>

                    @if($formularioselecionado)
                    <form class="mensagemSelecionadaFormulario" style="overflow-y: auto;"
                        action="{{ Route('formularios.update', $formularioselecionado->id) }}"
                        method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $formularioselecionado->id }}">

                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4>Detalhes do Formulário de Adoção</h4>
                                <div class="form-status reviewing">{{ $formularioselecionado->status }}</div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <h5 class="mb-3">Informações do Solicitante</h5>
                                    <p><strong>Nome:</strong> {{ $formularioselecionado->name }}</p>
                                    <p><strong>Email:</strong>{{ $formularioselecionado->email }}</p>
                                    <p><strong>Telefone:</strong> {{ $formularioselecionado->phone }}</p>
                                    <p><strong>Idade:</strong> {{ $formularioselecionado->age }} anos</p>
                                    <p><strong>Renda:</strong> {{ $formularioselecionado->renda }}</p>
                                </div>

                                <div class="col-md-6">
                                    <h5 class="mb-3">Informações do Animal</h5>
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{ asset('Imagem_animal/' . $formularioselecionado->animal->imagem ) }}" class="rounded-circle me-3" width="80" height="80">
                                        <div>
                                            <h5 class="mb-1">{{ $formularioselecionado->animal->nome }}</h5>
                                            <p class="mb-0 text-black">{{ $formularioselecionado->animal->raca  }}, {{ $formularioselecionado->animal->genero }}, {{ $formularioselecionado->animal->idade }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Informações de Residência</h5>
                                <p><strong>Endereço:</strong> {{ $formularioselecionado->address }}</p>
                                <p><strong>Tipo de Residência:</strong> {{ $formularioselecionado->residential }}</p>
                                <p><strong>Propriedade:</strong> {{ $formularioselecionado->property }}</p>
                                <p><strong>Espaço para o Animal:</strong> {{ $formularioselecionado->petSpace }}</p>
                                <p><strong>Todos Concordam com a Adoção:</strong> {{$formularioselecionado->familyAgreement }}</p>
                            </div>

                            @if ($formularioselecionado->hasOtherPets == "Sim")
                            <div class="mb-4">
                                <h5 class="mb-3">Informações sobre Outros Animais</h5>
                                <p><strong>Possui Outros Animais:</strong> {{ $formularioselecionado->hasOtherPets }}</p>
                                <p><strong>Quais:</strong> {{ $formularioselecionado->otherPets }}</p>
                                <p><strong>São Castrados e Vacinados:</strong> {{$formularioselecionado->otherPetsVaccinated }}</p>
                                <p><strong>Concorda com Castração e Vacinação:</strong> {{ $formularioselecionado->agreeVaccination }}</p>
                            </div>
                            @endif

                            <div class="mb-4">
                                <h5 class="mb-3">Termos e Condições</h5>
                                <p>
                                    <i class="fas {{ $formularioselecionado->aceita_termos == "Sim" ? 'fa-check-circle text-success' :  'fa-times-circle text-danger' }} me-2"></i>
                                    Concordou com os termos de adoção
                                </p>
                                <p>
                                    <i class="fas {{ $formularioselecionado->aceita_visitas == "Sim" ? 'fa-check-circle text-success' :  'fa-times-circle text-danger' }}  me-2"></i>
                                    Concordou em receber visitas de acompanhamento
                                </p>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <button class="btn btn-outline-danger" name="status" type="submit" value="Rejeitado">
                                    <i class="fas fa-times me-2"></i> Rejeitar
                                </button>
                                <button class="btn btn-success" type="submit" name="status" value="Aprovado">
                                    <i class="fas fa-check me-2"></i> Aprovar
                                </button>
                            </div>
                        </div>
                    </form>
                    @else
                    <div class="p-4">
                        <p class="text-black">Não Possuir formulario Pendente</p>
                    </div>
                    @endif
                </div>

            </div>
        </div>

        <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <div class="content-card">
                <div class="content-card-header">
                    <h5 class="content-card-title">Mensagens de Contato</h5>
                </div>

                <div class="content-card-message">
                    <div class="content-message">
                        @foreach ( $mensagens as $mensagem )
                        <a id="mensagem-{{ $mensagem->id }}"
                            href="{{ route('dashboard.contato.show', $mensagem->id) }}"
                            class="border-end card-message"
                            style="text-decoration: none;">
                            <div class="message-preview {{ $mensagem->id ==  $mensagemSelecionada->id ? 'unread' : ''}}">
                                <div class="sender-info">
                                    <div class="sender-name">
                                        {{ $mensagem->name }}
                                    </div>
                                    <div class="message-date">{{ $mensagem->data_formatada }}</div>
                                </div>
                                <div class="message-subject">
                                    {{ $mensagem->assunto_formatado }}
                                </div>
                                <div class="message-excerpt">{{Str::limit($mensagem->message, 45) }}</div>
                            </div>
                        </a>
                        @endforeach
                    </div>

                    <div class="mensagemSelecionada">
                        @if ($mensagemSelecionada)
                        <div class="col-md-12">
                            <div class="message-detail">
                                <div class="message-header">
                                    <div class="message-subject">{{ $mensagemSelecionada->assunto_formatado }}</div>
                                    <div class="message-meta">
                                        <div class="message-sender">De: {{ $mensagemSelecionada->name }} ({{ $mensagemSelecionada->email }})
                                        </div>
                                        <div class="message-date">Hoje, 15:45</div>
                                    </div>
                                    <div class="message-meta">
                                        <div>Telefone: {{$mensagemSelecionada->phone}}</div>
                                        <div>Assunto: {{ $mensagemSelecionada->assunto_formatado }}</div>
                                    </div>
                                </div>

                                <div class="message-content">
                                    {{ $mensagemSelecionada->message }}
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="p-3">
                            <p class="text-muted">Nenhuma mensagem selecionada.</p>
                        </div>
                        @endif
                        <div class="message-actions">
                            <form id="delete-form-{{ $mensagemSelecionada->id }}"
                                action={{ route('mensagens.delete', $mensagemSelecionada->id) }}
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button data-id={{ $mensagemSelecionada->id }} class="btn btn-outline-danger delete">
                                    <i class="fas fa-trash me-2"></i> Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const storedTab = localStorage.getItem('activeTab');
        const defaultTab = 'animals';

        const activeTab = storedTab || defaultTab;
        const tabButton = document.querySelector(`[data-bs-target="#${activeTab}"]`);
        const tabPane = document.querySelector(`#${activeTab}`);

        if (tabButton && tabPane) {
            document.querySelectorAll('.nav-link').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('show', 'active'));

            tabButton.classList.add('active');
            tabPane.classList.add('show', 'active');
        }

        document.querySelectorAll('.nav-link').forEach(btn => {
            btn.addEventListener('click', function() {
                const target = this.getAttribute('data-bs-target').replace('#', '');
                localStorage.setItem('activeTab', target);
            });
        });

        const selectedForm = document.querySelector('.mensagemSelecionadaFormulario');
        if (selectedForm) {
            setTimeout(() => {
                selectedForm.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }, 300);
        }
    });

    document.querySelectorAll('.delete').forEach(btn => {
        btn.addEventListener('click', function() {
            const animaisId = this.getAttribute('data-id');
            const form = document.getElementById(`delete-form-${animaisId}`);

            swal({
                title: "Tem certeza que deseja excluir?",
                text: "Essa ação não pode ser desfeita..",
                icon: "warning",
                buttons: {
                    cancel: "Cancelar",
                    confirm: {
                        text: "Sim, excluir",
                        className: "btn-danger"
                    }
                },
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const currentId = "{{ $mensagemSelecionada->id ?? '' }}";
        if (currentId) {
            const el = document.getElementById("mensagem-" + currentId);
            if (el) {
                el.scrollIntoView();
            }
        }
    });
</script>
@endsection