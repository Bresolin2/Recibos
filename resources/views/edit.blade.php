@extends('layout.app')
@section('title', 'Editar usuário')
@section('content')

    <thead>
        <div class="row">
            <div class="col">
                <a href="{{ route('index') }}">
                    <button class="btn btn-primary mt-3"><i class="bi bi-arrow-left"></i> Voltar</button>
                </a>
            </div>
            <div class="col-8">
                <h1>Editar usuário</h1>
            </div>
        </div>
    </thead><br>

    <tbody>
        <form action="{{ route('update', $usuarios->id) }}" method="put">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome"
                        value="{{ $usuarios->name }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail"
                        value="{{ $usuarios->email }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Senha:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
                </div>
            </div>

            <button type="submit" class="btn btn-success mt-3"><i class="bi bi-check-all"></i> Editar</button>
        </form>
    </tbody>

@endsection
