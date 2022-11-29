@extends('layout.app')
@section('title', 'Cadastrar usuário')
@section('content')

    <thead>
        <div class="row">
            <div class="col">
                <a href="{{ route('index') }}">
                    <button class="btn btn-primary mt-3"><i class="bi bi-arrow-left"></i> Voltar</button>
                </a>
            </div>
            <div class="col-8">
                <h1>Cadastrar usuário</h1>
            </div>
        </div>
    </thead><br>

    <tbody>
        <form action="/registrar" method="POST">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                </div>
                <div class="col">
                    <label for="exampleInputPassword1" class="form-label">Senha:</label>
                    <input type="password" name="password" id="password" placeholder="Senha" bcrypt required
                        class="form-control">
                </div>
                <div class="col">
                    <label for="exampleInputPassword2" class="form-label">Confirmar Senha:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"F
                        placeholder="Confirmar senha" bcrypt>
                </div>
            </div>

            <button type="submit" class="btn btn-success mt-3"><i class="bi bi-check-all"></i> Cadastrar</button>
    </tbody>

@endsection
