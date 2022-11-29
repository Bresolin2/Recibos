@extends('layout.app')
@section('title', 'Cadastrar usuário')
@section('content')

    <thead>
        <h1>Cadastrar usuário</h1>
    </thead>

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

        <button type="submit" class="btn btn-success mt-3">Cadastrar</button>
        {{--
            <label>Nome:</label>
            <input type="text" name="name" id="name" placeholder="Nome"><br><br>

            <label>Email:</label>
            <input type="text" name="email" id="email" placeholder="E-mail" required><br><br>

            <label>Senha:</label>
            <input type="password" name="password" id="password" placeholder="Senha" bcrypt required><br><br>

            <label>Confirmar senha:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar senha"
                bcrypt required><br><br>

            <button type="submit" class="btn btn-success">Cadastrar</button>

        </form>
    </table> --}}
    @endsection
