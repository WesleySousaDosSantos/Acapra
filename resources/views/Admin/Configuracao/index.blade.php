@extends('Admin.Layout.index')

@section('title', 'Dashboard')

@section('content')
<div class="main-content">
    <div class="page-header">
        <h1 class="page-title">
            Configurações do Sistema
        </h1>
    </div>

    <div class="settings-container">
        <div class="settings-content">
            <form class="settings-section active" action="{{ Route('configuracao.update') }}" method="POST" id="general" enctype="multipart/form-data">
                @method('POST')
                @csrf

                <div class="section-title">
                    <i class="fas fa-building"></i>
                    Configurações Gerais
                </div>
                <p class="section-subtitle">Configure as informações básicas da organização ACAPRA</p>

                <div class="settings-group">
                    <div class="group-title">Informações da Organização</div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="orgName" class="form-label">Nome da Organização <span class="required">*</span></label>
                            <input type="text" class="form-control" name="orgName" id="orgName" value="{{ $Configuracoe->orgName }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="orgEmail" class="form-label">Email Principal <span class="required">*</span></label>
                            <input type="email" class="form-control" name="orgEmail" id="orgEmail" value="{{ $Configuracoe->orgEmail }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="orgPhone" class="form-label">Telefone <span class="required">*</span></label>
                            <input type="tel" class="form-control" id="orgPhone" name="orgPhone" value="{{ $Configuracoe->orgPhone }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="orgAddress" class="form-label">Endereço Completo</label>
                        <textarea class="form-control" id="orgAddress" name="orgAddress" rows="2" style="resize: none;">{{ $Configuracoe->orgAddress }}</textarea>
                    </div>
                </div>

                <div class="settings-group">
                    <div class="group-title">Redes Sociais</div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="socialFacebook" class="form-label">
                                <i class="fab fa-facebook text-primary me-2"></i>Facebook
                            </label>
                            <input type="url" class="form-control" name="socialFacebook" value="{{ $Configuracoe->socialFacebook }}" id="socialFacebook" placeholder="https://facebook.com/acapra">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="socialInstagram" class="form-label">
                                <i class="fab fa-instagram text-danger me-2"></i>Instagram
                            </label>
                            <input type="url" class="form-control" id="socialInstagram" name="socialInstagram" value="{{ $Configuracoe->socialInstagram }}" placeholder="https://instagram.com/acapra">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="socialTwitter" class="form-label">
                                <i class="fab fa-twitter text-info me-2"></i>Twitter
                            </label>
                            <input type="url" class="form-control" id="socialTwitter" name="socialTwitter" value="{{ $Configuracoe->socialTwitter }}" placeholder="https://twitter.com/acapra">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="socialWhatsapp" class="form-label">
                                <i class="fab fa-whatsapp text-info me-2"></i>Whatsapp
                            </label>
                            <input type="url" class="form-control" id="socialWhatsapp" name="socialWhatsapp" value="{{ $Configuracoe->socialWhatsapp }}" placeholder="https://whatsapp.com/acapra">
                        </div>
                    </div>
                </div>


                <div class="settings-group">
                    <div class="group-title">Logo</div>
                    <div class="logo-upload-area" onclick="document.getElementById('logoUpload').click()">
                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                        <h5>Clique para fazer upload do logo</h5>
                        <p class="text-muted">PNG, JPG ou SVG (máx. 2MB)</p>
                        <input type="file" id="logoUpload" name="logo" style="display: none;" accept="image/*">
                    </div>
                    <img src="{{ $Configuracoe->logo ? asset('logos/'.$Configuracoe->logo) : '/api/placeholder/200/100' }}"
                        alt="Logo Preview"
                        class="logo-preview"
                        id="logoPreview">
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-purple">
                        <i class="fas fa-save me-2"></i>Salvar Alterações
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="successToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <i class="fas fa-check-circle me-2"></i>
                <span id="toastMessage">Configurações salvas com sucesso!</span>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');

        if (toggleSidebar && sidebar) {
            toggleSidebar.addEventListener('click', function() {
                sidebar.classList.toggle('show');
            });
        }

        document.addEventListener('click', function(event) {
            if (window.innerWidth <= 767.98 &&
                !sidebar.contains(event.target) &&
                event.target !== toggleSidebar) {
                sidebar.classList.remove('show');
            }
        });

        document.getElementById('logoUpload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('logoPreview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });


    });

    function showSection(sectionId) {
        document.querySelectorAll('.settings-section').forEach(section => {
            section.classList.remove('active');
        });

        document.querySelectorAll('.settings-nav-item').forEach(item => {
            item.classList.remove('active');
        });

        document.getElementById(sectionId).classList.add('active');

        event.target.closest('.settings-nav-item').classList.add('active');
    }


    function getSectionName(section) {
        const names = {
            'general': 'Geral',
            'appearance': 'Aparência',
        };
        return names[section] || section;
    }
</script>
@endsection