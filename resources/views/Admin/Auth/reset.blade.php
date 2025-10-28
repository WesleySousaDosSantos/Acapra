@extends('Admin.Layout.login')

@section('title', 'Senha')

@section('content')
<div class="col-md-7">
    <div class="login-form">
        <h2 class="text-center mb-4 fw-bold">Troca de senha</h2>

        <form method="POST" action="{{ route('password.update') }}">
            <input type="hidden" name="token" value="{{ $token }}">
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

            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <label for="password" class="form-label">Senha</label>
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

            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <label for="password" class="form-label">Confirme a Senha:</label>
                </div>
                <div class="input-group">
                    <span class="input-group-text bg-light">
                        <i class="fas fa-lock text-muted"></i>
                    </span>

                    <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Sua senha" required>
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>


            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-purple py-2">Redefinir Senha</button>
            </div>
            <div class="d-grid gap-2" style="margin-top: 10px;">
                <a style="border: 1px solid purple;" href="{{ Route('login') }}" class="btn btn-white py-2">Voltar</a>
            </div>
        </form>
    </div>
</div>
@endsection