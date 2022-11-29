@extends('layout.app')
@section('title', 'Lista de clientes')
@section('content')

    <nav class="mt-3 mb-3 navbar navbar-expand-lg bg-light" name="cabecalho" id="cabecalho">
        <div class="container-fluid">
            <input type="image" src="{{ url('../images/logo.png') }}" href="{{route('index')}}"></input>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger me-2"><i class="bi bi-box-arrow-left"></i></button>
        </form>
        <a href="{{ route('index') }}">
            <button class="btn btn-success me-2"><i class="bi bi-house"></i></button>
        </a>
        <a href="https://infus.inf.br/">
            <button class="btn btn-info me-2"><i class="bi bi-info-lg"></i></button>
        </a>
        <a href="{{ route('registro')}}">
            <button class="btn btn-primary me-2"><i class="bi bi-plus-square"></i></button>
        </a>
    </nav>

    {{-- Filtro de pesquisa --}}
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                
                <form class="form-inline" id="frmFiltro" name="frmFiltro" action="{{ route('search') }}" method="POST" style="width: 100%;">
                    @csrf
                    <div class="input-group mb-2">
                        <select required form="frmFiltro" id="select_filtro" name="select_filtro" data-column="0"
                            class="form-control" style="width: 20%;">
                            <option value="0" disabled selected>Selecione...</option>
                            <option value="1">Id</option>
                            <option value="2">Nome</option>
                            <option value="3">Documento</option>
                            <option value="4">E-mail</option>
                            <option value="6">Data de Cadastro</option>
                            <option value="7">Data de Vencimento</option>
                            <option value="5">Premium</option>
                        </select>
                        <input required form="frmFiltro" id="filtro" name="filtro" type="text" class="form-control"
                            aria-describedby="select_filtro" aria-describedby="btnFiltro" style="width: 60%;">
                        <button form="frmFiltro" type="submit" id="btnFiltro" class="btn btn-info"
                            style="width: 20%;">Filtrar</button>
                    </div>
                </form>
            </div>
        </div>

        <tbody>
            <table id="tblLista" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Documento</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Data de Cadastro</th>
                        <th scope="col">Data de Vencimento</th>
                        <th scope="col">Premium</th>
                        <th scope="col">Detalhes</th>
                    </tr>
                </thead>
                @foreach ($clientes as $cliente)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $cliente->id }} </th>
                            <td>{{ $cliente->nome }} </td>
                            <td> {{ $cliente->documento }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->data_cadastro }}</td>
                            <td>{{ $cliente->Permissao->data_validade ?? '-'}}</td>
                            <td>
                                @php
                                 echo ((isset($cliente->Permissao->ativo)) && ($cliente->Permissao->ativo === 1)) ? '<i class="fs-3 mb-2 bi bi-check2-square" width="16" height="16"></i>' : ''; 
                                 @endphp
                            </td>
                            <td><a class="btn btn-success" href="{{ route('show', $cliente->id) }}">Detalhes</a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
    </div>
    <div class="d-flex justify-content-center">
        {!! $clientes->links() !!}
    </div>
    </tbody>
@endsection
