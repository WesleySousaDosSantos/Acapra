@extends('Admin.Layout.login')

@section('title', 'Senha')

@section('content')
<div class="col-md-7">
    <div class="login-form">
        <h2 class="text-center mb-4 fw-bold">Esqueceu a Senha?</h2>

        <form method="POST" action="{{ Route('password.email') }}">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text bg-light">
                        <i class="fas fa-envelope text-muted"></i>
                    </span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Insira um endereço de e-mail válido" value="{{ old('email') }}">
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-purple py-2">Enviar</button>
            </div>
            <div class="d-grid gap-2" style="margin-top: 10px;">
                <a style="border: 1px solid purple;" href="{{ Route('login') }}" class="btn btn-white py-2">Voltar</a>
            </div>
        </form>
    </div>
</div>
@endsection