@extends('layout.app')
@section('title', 'Cadastrar usuário')
@section('content')

    <h1>Cadastrar usuário</h1>

    <form action="/registrar" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="name" id="name" placeholder="Nome"><br><br>

        <label>Email:</label>
        <input type="text" name="email" id="email" placeholder="E-mail"><br><br>

        <label>Senha:</label>
        <input type="password" name="password" id="password" placeholder="Senha" bcrypt><br><br>

        <label>Confirmar senha:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar senha" bcrypt><br><br>

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection
