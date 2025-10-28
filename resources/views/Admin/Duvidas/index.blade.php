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
                                    <form id="delete-form-{{ $duvida->id }}"
                                        action="{{ Route('duvidas.delete', $duvida->id) }}"
                                        method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')

                                        <a data-id={{ $duvida->id }} class="action-btn delete" title="Excluir">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </form>
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

@section('js')

<script>
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