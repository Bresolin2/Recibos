@extends('layout.app')
@section('title', 'Lista de usuários cadastrados')
@section('content')

    <thead>
        <div class="row">
            <div class="col">
                <a href="{{ route('index') }}">
                    <button class="btn btn-primary mt-3"><i class="bi bi-arrow-left"></i> Voltar</button>
                </a>
            </div>
            <div class="col-8">
                <h1>Lista de Usuários</h1>
            </div>
        </div>
    </thead><br>
    <div class="container">
        <tbody>
            <table id="tblLista" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>

                    </tr>
                </thead>
                @foreach ($usuarios as $usuario)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $usuario->id }} </th>
                            <td>{{ $usuario->name }} </td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                                <form action="{{ route('destroy', $usuario->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i>
                                        Excluir</button>
                                </form>
                            </td>
                            <td> 
                                <a class="btn btn-warning" role="button" href="{{ route('edit', $usuario->id) }}"><i
                                        class="bi bi-pencil-square"></i> Editar</a>
                            </td>
                        </tr>


                    </tbody>
                @endforeach

            </table><br>
    </div>
    <div class="d-flex justify-content-center">
        {!! $usuarios->links() !!}
    </div>
    <a href="{{ route('registro') }}">
        <button class="btn btn-primary me-2">Cadastrar novos usuários</button>
    </a>
    </tbody>
    </div>
@endsection
