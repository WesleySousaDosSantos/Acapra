@extends('Admin.Layout.index')
@section('title', 'Formularios')

@php
$activeTab = match($formularioselecionado->status ?? 'Pendente') {
'Aprovado' => 'forms',
'Rejeitado' => 'messages',
default => 'formulario-pedding'
};
@endphp

@section('content')

<div class="main-content">
    <div class="dashboard-header">
        <h1 class="dashboard-title">Formulários de Adoção Recebidos</h1>
    </div>

    <ul class="nav nav-tabs" id="dashboardTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link {{ $activeTab === 'formulario-pedding' ? 'active' : '' }}"
                id="formulario-pedding-tab"
                data-bs-toggle="tab"
                data-bs-target="#formulario-pedding"
                type="button"
                role="tab"
                aria-controls="formulario-pedding"
                aria-selected="{{ $activeTab === 'formulario-pedding' ? 'true' : 'false' }}"
                @if($pendentes->isEmpty()) disabled @endif>
                Pendente
            </button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link {{ $activeTab === 'forms' ? 'active' : '' }}"
                id="forms-tab"
                data-bs-toggle="tab"
                data-bs-target="#forms"
                type="button"
                role="tab"
                aria-controls="forms"
                aria-selected="{{ $activeTab === 'forms' ? 'true' : 'false' }}"
                @if($aprovados->isEmpty()) disabled @endif>
                Aprovado
            </button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link {{ $activeTab === 'messages' ? 'active' : '' }}"
                id="messages-tab"
                data-bs-toggle="tab"
                data-bs-target="#messages"
                type="button"
                role="tab"
                aria-controls="messages"
                aria-selected="{{ $activeTab === 'messages' ? 'true' : 'false' }}"
                @if($rejeitados->isEmpty()) disabled @endif>
                Rejeitado
            </button>
        </li>
    </ul>


    <div class="tab-content mt-3" id="dashboardTabsContent">
        <div class="tab-pane fade {{ $activeTab === 'formulario-pedding' ? 'show active' : '' }}" id="formulario-pedding" role="tabpanel" aria-labelledby="formulario-pedding-tab">
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
                            <h5 class="section-title">
                                <i class="fas fa-file-alt me-2"></i>Documentos Enviados
                            </h5>
                            <div class="photo-gallery">
                                <div class="photo-item">
                                    <a href="{{ asset('Imagens_formulario/' . $formularioselecionado->rgPhoto) }}" target="_blank">
                                        <img src="{{ asset('Imagens_formulario/' . $formularioselecionado->rgPhoto ) }}" alt="RG">
                                        <div class="photo-label">Foto do RG</div>
                                    </a>
                                </div>
                                <div class="photo-item">
                                    <a href="{{ asset('Imagens_formulario/' . $formularioselecionado->incomeProof ) }}" target="_blank">
                                        <img src="{{ asset('Imagens_formulario/' . $formularioselecionado->incomeProof ) }}" alt="Comprovante de Renda">
                                        <div class="photo-label">Comprovante de Renda</div>
                                    </a>
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

                        <div class="mt-3">
                            <h5 class="section-title">
                                <i class="fas fa-home me-2"></i>Fotos do Local
                            </h5>
                            <div class="photo-gallery">
                                <div class="photo-item">
                                    <a href="{{ asset('Imagens_formulario/' . $formularioselecionado->locationPhoto ) }}" target="_blank">
                                        <img src="{{ asset('Imagens_formulario/' . $formularioselecionado->locationPhoto ) }}" alt="Local do Animal">
                                        <div class="photo-label">Local onde o animal irá ficar</div>
                                    </a>
                                </div>

                                @if($formularioselecionado->fencePhoto)
                                @foreach(json_decode($formularioselecionado->fencePhoto, true) as $index => $photo)
                                <div class="photo-item" id="photo-{{ $index }}">
                                    <a href="{{ asset('Imagens_cercas/' . $photo) }}" target="_blank">
                                        <img src="{{ asset('Imagens_cercas/' . $photo) }}" alt="Telas de Proteção {{ $index + 1 }}">
                                        <div class="photo-label">Telas de Proteção</div>
                                    </a>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>

                        @if ($formularioselecionado->hasOtherPets == "Sim")
                        <div class="mb-4">
                            <h5 class="mb-3">Informações sobre Outros Animais</h5>
                            <p><strong>Possui Outros Animais:</strong> {{ $formularioselecionado->hasOtherPets }}</p>
                            <p><strong>Quais:</strong> {{ $formularioselecionado->otherPets }}</p>
                            <p><strong>São Castrados e Vacinados:</strong> {{$formularioselecionado->otherPetsVaccinated }}</p>
                            <p><strong>Concorda com Castração e Vacinação:</strong> {{ $formularioselecionado->agreeVaccination }}</p>

                            <div class="mt-3">
                                <h5 class="section-title">
                                    <i class="fas fa-paw me-2"></i>Fotos dos Outros Animais
                                </h5>
                                <div class="photo-gallery">


                                    @if($formularioselecionado->otherPetsPhotos)
                                    @foreach(json_decode($formularioselecionado->otherPetsPhotos, true) as $index => $photo)
                                    <div class="photo-item" id="other-pet-{{ $index }}">
                                        <a href="{{ asset('Imagens_outros_animais/' . $photo) }}" target="_blank">
                                            <img src="{{ asset('Imagens_outros_animais/' . $photo) }}" alt="Outro Animal {{ $index + 1 }}">
                                            <div class="photo-label">Outro Animal {{ $index + 1 }}</div>
                                        </a>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
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

        <div class="tab-pane fade {{ $activeTab === 'forms' ? 'show active' : '' }}" id="forms" role="tabpanel" aria-labelledby="forms-tab">
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
                        <span class="form-status approved">{{ $formulario->status }}</span>
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
                            <div class="form-status approved">{{ $formularioselecionado->status }}</div>
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
                            <h5 class="section-title">
                                <i class="fas fa-file-alt me-2"></i>Documentos Enviados
                            </h5>
                            <div class="photo-gallery">
                                <div class="photo-item">
                                    <a href="{{ asset('Imagens_formulario/' . $formularioselecionado->rgPhoto) }}" target="_blank">
                                        <img src="{{ asset('Imagens_formulario/' . $formularioselecionado->rgPhoto ) }}" alt="RG">
                                        <div class="photo-label">Foto do RG</div>
                                    </a>
                                </div>
                                <div class="photo-item">
                                    <a href="{{ asset('Imagens_formulario/' . $formularioselecionado->incomeProof ) }}" target="_blank">
                                        <img src="{{ asset('Imagens_formulario/' . $formularioselecionado->incomeProof ) }}" alt="Comprovante de Renda">
                                        <div class="photo-label">Comprovante de Renda</div>
                                    </a>
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

                        <div class="mt-3">
                            <h5 class="section-title">
                                <i class="fas fa-home me-2"></i>Fotos do Local
                            </h5>
                            <div class="photo-gallery">
                                <div class="photo-item">
                                    <a href="{{ asset('Imagens_formulario/' . $formularioselecionado->locationPhoto ) }}" target="_blank">
                                        <img src="{{ asset('Imagens_formulario/' . $formularioselecionado->locationPhoto ) }}" alt="Local do Animal">
                                        <div class="photo-label">Local onde o animal irá ficar</div>
                                    </a>
                                </div>

                                @if($formularioselecionado->fencePhoto)
                                @foreach(json_decode($formularioselecionado->fencePhoto, true) as $index => $photo)
                                <div class="photo-item" id="photo-{{ $index }}">
                                    <a href="{{ asset('Imagens_cercas/' . $photo) }}" target="_blank">
                                        <img src="{{ asset('Imagens_cercas/' . $photo) }}" alt="Telas de Proteção {{ $index + 1 }}">
                                        <div class="photo-label">Telas de Proteção</div>
                                    </a>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>

                        @if ($formularioselecionado->hasOtherPets == "Sim")
                        <div class="mb-4">
                            <h5 class="mb-3">Informações sobre Outros Animais</h5>
                            <p><strong>Possui Outros Animais:</strong> {{ $formularioselecionado->hasOtherPets }}</p>
                            <p><strong>Quais:</strong> {{ $formularioselecionado->otherPets }}</p>
                            <p><strong>São Castrados e Vacinados:</strong> {{$formularioselecionado->otherPetsVaccinated }}</p>
                            <p><strong>Concorda com Castração e Vacinação:</strong> {{ $formularioselecionado->agreeVaccination }}</p>

                            <div class="mt-3">
                                <h5 class="section-title">
                                    <i class="fas fa-paw me-2"></i>Fotos dos Outros Animais
                                </h5>
                                <div class="photo-gallery">
                                    @if($formularioselecionado->otherPetsPhotos)
                                    @foreach(json_decode($formularioselecionado->otherPetsPhotos, true) as $index => $photo)
                                    <div class="photo-item" id="other-pet-{{ $index }}">
                                        <a href="{{ asset('Imagens_outros_animais/' . $photo) }}" target="_blank">
                                            <img src="{{ asset('Imagens_outros_animais/' . $photo) }}" alt="Outro Animal {{ $index + 1 }}">
                                            <div class="photo-label">Outro Animal {{ $index + 1 }}</div>
                                        </a>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
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

                    </div>
                </form>
                @else
                <div class="p-4">
                    <p class="text-black">Não Possuir formulario Aprovado</p>
                </div>
                @endif
            </div>
        </div>

        <div class="tab-pane fade {{ $activeTab === 'messages' ? 'show active' : '' }}" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <div class="content-card-message-formulario">
                <div class="content-message-formulario">
                    @foreach ($rejeitados as $formulario)
                    <a href="{{ Route('formularios.show', $formulario->id) }}"
                        class="adoption-form-preview {{ $formularioselecionado && $formulario->id == $formularioselecionado->id ? 'new' : '' }}">
                        <div class="applicant-info">
                            <div class="applicant-name">
                                <span class="unread-badge"></span> {{ $formulario->name }}
                            </div>
                            <div class="form-date">{{$formulario->dataformatada}}</div>
                        </div>
                        <div class="pet-name">Para: {{ $formulario->animal->nome }}</div>
                        <span class="form-status rejected">{{ $formulario->status }}</span>
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
                            <div class="form-status rejected">{{ $formularioselecionado->status }}</div>
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
                            <h5 class="section-title">
                                <i class="fas fa-file-alt me-2"></i>Documentos Enviados
                            </h5>
                            <div class="photo-gallery">
                                <div class="photo-item">
                                    <a href="{{ asset('Imagens_formulario/' . $formularioselecionado->rgPhoto) }}" target="_blank">
                                        <img src="{{ asset('Imagens_formulario/' . $formularioselecionado->rgPhoto ) }}" alt="RG">
                                        <div class="photo-label">Foto do RG</div>
                                    </a>
                                </div>
                                <div class="photo-item">
                                    <a href="{{ asset('Imagens_formulario/' . $formularioselecionado->incomeProof ) }}" target="_blank">
                                        <img src="{{ asset('Imagens_formulario/' . $formularioselecionado->incomeProof ) }}" alt="Comprovante de Renda">
                                        <div class="photo-label">Comprovante de Renda</div>
                                    </a>
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

                        <div class="mt-3">
                            <h5 class="section-title">
                                <i class="fas fa-home me-2"></i>Fotos do Local
                            </h5>
                            <div class="photo-gallery">
                                <div class="photo-item">
                                    <a href="{{ asset('Imagens_formulario/' . $formularioselecionado->locationPhoto ) }}" target="_blank">
                                        <img src="{{ asset('Imagens_formulario/' . $formularioselecionado->locationPhoto ) }}" alt="Local do Animal">
                                        <div class="photo-label">Local onde o animal irá ficar</div>
                                    </a>
                                </div>

                                @if($formularioselecionado->fencePhoto)
                                @foreach(json_decode($formularioselecionado->fencePhoto, true) as $index => $photo)
                                <div class="photo-item" id="photo-{{ $index }}">
                                    <a href="{{ asset('Imagens_cercas/' . $photo) }}" target="_blank">
                                        <img src="{{ asset('Imagens_cercas/' . $photo) }}" alt="Telas de Proteção {{ $index + 1 }}">
                                        <div class="photo-label">Telas de Proteção</div>
                                    </a>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>

                        @if ($formularioselecionado->hasOtherPets == "Sim")
                        <div class="mb-4">
                            <h5 class="mb-3">Informações sobre Outros Animais</h5>
                            <p><strong>Possui Outros Animais:</strong> {{ $formularioselecionado->hasOtherPets }}</p>
                            <p><strong>Quais:</strong> {{ $formularioselecionado->otherPets }}</p>
                            <p><strong>São Castrados e Vacinados:</strong> {{$formularioselecionado->otherPetsVaccinated }}</p>
                            <p><strong>Concorda com Castração e Vacinação:</strong> {{ $formularioselecionado->agreeVaccination }}</p>

                            <div class="mt-3">
                                <h5 class="section-title">
                                    <i class="fas fa-paw me-2"></i>Fotos dos Outros Animais
                                </h5>
                                <div class="photo-gallery">


                                    @if($formularioselecionado->otherPetsPhotos)
                                    @foreach(json_decode($formularioselecionado->otherPetsPhotos, true) as $index => $photo)
                                    <div class="photo-item" id="other-pet-{{ $index }}">
                                        <a href="{{ asset('Imagens_outros_animais/' . $photo) }}" target="_blank">
                                            <img src="{{ asset('Imagens_outros_animais/' . $photo) }}" alt="Outro Animal {{ $index + 1 }}">
                                            <div class="photo-label">Outro Animal {{ $index + 1 }}</div>
                                        </a>
                                    </div>
                                    @endforeach
                                    @endif

                                </div>
                            </div>
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
                    </div>
                </form>
                @else
                <div class="p-4">
                    <p class="text-black">Não Possuir formulario Rejeitado</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const currentId = "{{ $formularioselecionado->id ?? '' }}";
        if (currentId) {
            const el = document.querySelector(`[href$="/${currentId}"]`);
            if (el) el.scrollIntoView({
                behavior: "smooth",
                block: "center"
            });
        }

        const tabButtons = document.querySelectorAll('[data-bs-toggle="tab"]');

        tabButtons.forEach(tab => {
            tab.addEventListener('shown.bs.tab', function(event) {
                const targetId = event.target.getAttribute('data-bs-target');
                const firstForm = document.querySelector(`${targetId} .adoption-form-preview`);

                if (firstForm) {
                    const firstLink = firstForm.getAttribute('href');
                    if (firstLink) {
                        window.location.href = firstLink;
                    }
                }
            });
        });
    });

    document.querySelector('.forms')
</script>
@endsection