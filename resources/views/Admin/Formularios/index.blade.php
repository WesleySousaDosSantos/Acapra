@extends('Admin.Layout.index')

@section('title', 'Formularios')

@section('content')
<div class="main-content">
    <div class="dashboard-header">
        <h1 class="dashboard-title">Formulários de Adoção Recebidos</h1>
    </div>

    <ul class="nav nav-tabs" id="dashboardTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="formulario-pedding-tab" data-bs-toggle="tab" data-bs-target="#formulario-pedding"
                type="button" role="tab" aria-controls="formulario-pedding" aria-selected="true">
                Pendente
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="forms-tab" data-bs-toggle="tab" data-bs-target="#forms"
                type="button" role="tab" aria-controls="forms" aria-selected="false">
                Aprovado
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
                type="button" role="tab" aria-controls="messages" aria-selected="false">
                Rejeitado
            </button>
        </li>
    </ul>

    <div class="tab-content mt-3" id="dashboardTabsContent">
        <div class="tab-pane fade show active" id="formulario-pedding" role="tabpanel" aria-labelledby="formulario-pedding-tab">
            <div class="content-card-message-formulario">
                <div class="content-message-formulario">
                    @foreach ($pendentes as $formulario)
                    <a href="{{ Route('formularios.show', $formulario->id) }}"
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
                    <p class="text-black">Selecione um formulário da lista para visualizar os detalhes.</p>
                </div>
                @endif
            </div>
        </div>

        <div class="tab-pane fade" id="forms" role="tabpanel" aria-labelledby="forms-tab">
            <div class="content-card-message-formulario">
                <div class="content-message-formulario">
                    @foreach ($aprovados as $formulario)
                    <a href="{{ Route('formularios.show', $formulario->id) }}"
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
                    <p class="text-black">Selecione um formulário da lista para visualizar os detalhes.</p>
                </div>
                @endif
            </div>
        </div>

        <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <p>Conteúdo da aba de mensagens</p>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
$(document).ready(function () {
    // Quando mudar de aba
    $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
        let target = $(e.target).attr("data-bs-target"); // aba atual (#formulario-pedding, #forms, #messages)

        // Seleciona o primeiro link da aba ativa
        let firstForm = $(target).find('.adoption-form-preview').first();

        if (firstForm.length) {
            window.location.href = firstForm.attr('href');
        }
    });
});
</script>

@endsection