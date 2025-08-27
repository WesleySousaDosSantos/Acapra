@extends('Admin.Layout.login')

@section('title', 'login')

@section('content')
<div class="col-md-7">
    <div class="login-form">
        <h2 class="text-center mb-4 fw-bold">Bem-vindo de volta!</h2>

        <form method="POST" action="{{ Route('login.update') }}">
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
                    <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" value="{{ old('email') }}">
                </div>
            </div>

            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <label for="password" class="form-label">Senha</label>
                    <a href="{{ Route('password.request')}}" class="text-decoration-none text-purple small">Esqueceu a senha?</a>
                </div>
                <div class="input-group">
                    <span class="input-group-text bg-light">
                        <i class="fas fa-lock text-muted"></i>
                    </span>

                    <input type="password" class="form-control" id="password" name="password" placeholder="Sua senha" required>
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-purple py-2">Entrar</button>
            </div>
        </form>
    </div>
</div>
@endsection