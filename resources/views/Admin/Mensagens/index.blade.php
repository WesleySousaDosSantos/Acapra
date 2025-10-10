@extends('Admin.Layout.index')

@section('title', 'Mensagens')


@section('content')
<div class="main-content">
    <div class="dashboard-header">
        <h1 class="dashboard-title">Mensagens de Contato</h1>
    </div>

    <div class="content-card-message">
        <div class="content-message">
            @foreach ( $mensagens as $mensagem )
            <a href="{{ route('mensagens.show', $mensagem->id) }}" class="border-end card-message" style="text-decoration: none;">
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
            text: "Essa ação não pode ser desfeita. O serviço será removido permanentemente.",
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