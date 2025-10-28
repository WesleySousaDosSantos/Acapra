@extends('Admin.Layout.index')

@section('title', 'Usuários')

@section('content')
<div class="main-content">
    <div class="dashboard-header d-flex justify-content-between align-items-center">
        <h1 class="dashboard-title">Gerenciar Usuários</h1>
        <button class="btn btn-purple btn-sm" data-bs-toggle="modal" data-bs-target="#userModal" onclick="openAddUserModal()">
            <i class="fas fa-user-plus me-2"></i> Novo Usuário
        </button>
    </div>

    <div class="content-card mt-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="60">#</th>
                        <th width="70">Avatar</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Data Cadastro</th>
                        <th width="150" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <div class="user-avatar-small" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                {{ strtoupper(substr($user->nome, 0, 2)) }}
                            </div>
                        </td>
                        <td>{{ $user->nome }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone ?? '-' }}</td>
                        <td>{{ $user->data_cadastro }}</td>
                        <td class="text-center">
                            <form
                                id="delete-form-{{ $user->id }}"
                                action="{{ route('usuario.delete', $user->id) }}"
                                method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button data-id={{ $user->id }} class="btn btn-sm btn-outline-danger delete" title="Excluir">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    @if($usuarios->isEmpty())
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">Nenhum usuário encontrado.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="userForm" method="POST" action="{{ route('usuario.store') }}">
                @csrf
                @method('POST')

                <div class="modal-header">
                    <h5 class="modal-title" id="userModalLabel"><i class="fas fa-user-plus me-2"></i>Novo Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nome Completo *</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Telefone</label>
                            <input type="text" name="phone" class="form-control" placeholder="(00) 00000-0000">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Senha *</label>
                            <input type="password" name="password" class="form-control" minlength="8" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Confirmar Senha *</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-purple">
                        <i class="fas fa-save me-2"></i>Salvar Usuário
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function openAddUserModal() {
        document.getElementById('userForm').reset();
        document.getElementById('userModalLabel').innerHTML = '<i class="fas fa-user-plus me-2"></i>Novo Usuário';
    }

    function editUser(id) {
        document.getElementById('userModalLabel').innerHTML = '<i class="fas fa-user-edit me-2"></i>Editar Usuário';

        const form = document.getElementById('userForm');
        form.action = `/usuarios/${id}`;
        form.method = "POST";

        let methodInput = form.querySelector('input[name="_method"]');
        if (!methodInput) {
            methodInput = document.createElement('input');
            methodInput.type = 'hidden';
            methodInput.name = '_method';
            form.appendChild(methodInput);
        }
        methodInput.value = 'POST';

        fetch(`/usuarios/${id}`)
            .then(response => response.json())
            .then(data => {
                form.querySelector('input[name="nome"]').value = data.nome;
                form.querySelector('input[name="email"]').value = data.email;
                form.querySelector('input[name="phone"]').value = data.phone ?? '';
                form.querySelector('input[name="password"]').value = '';
                form.querySelector('input[name="password_confirmation"]').value = '';

                const modal = new bootstrap.Modal(document.getElementById('userModal'));
                modal.show();
            })
            .catch(error => {
                console.error('Erro ao carregar usuário:', error);
                alert('Erro ao carregar informações do usuário.');
            });
    }


    function viewUser(id) {
        alert('Visualizando usuário ID: ' + id);
    }

    document.querySelectorAll('.delete').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();

            const animaisId = this.getAttribute('data-id');
            const form = document.getElementById(`delete-form-${animaisId}`);

            swal({
                title: "Tem certeza que deseja excluir?",
                text: "Essa ação não pode ser desfeita.",
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
</script>
@endsection