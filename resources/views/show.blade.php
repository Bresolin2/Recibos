@extends('layout.app')
@section('title', 'Cliente')
@section('content')
    <nav class="navbar navbar-expand-lg mb-3" style="background-color: #CFE2FF;">
        <div class="container-fluid">
            <a class="navbar-brand btn btn-outline-info" href="{{ route('index') }}">Voltar</a>

            <h1 class="fs-2 bold mb-3 text-center">{{ $clientes->nome }}</h1>
        </div>
    </nav>

    <table class="table caption-top">
        <div class="container">
            ID:<b> {{ $clientes->id }}</b><br>
            NOME:<b> {{ $clientes->nome }}</b><br>
            DOCUMENTO:<b> {{ $clientes->documento }}</b><br>
            LOGRADOURO:<b> {{ $clientes->logradouro }}</b><br>
            NÚMERO:<b> {{ $clientes->numero }}</b><br>
            COMPLEMENTO:<b> {{ $clientes->complemento }}</b><br>
            BAIRRO:<b> {{ $clientes->bairro }}</b><br>
            CEP:<b> {{ $clientes->cep }}</b><br>
            IE/RG:<b> {{ $clientes->ie_rg }}</b><br>
            SITE:<b> {{ $clientes->site }}</b><br>
            MUNICIPIO:<b> {{ $clientes->municipio }}</b><br>
            UF:<b> {{ $clientes->uf }}</b><br>
            FONE:<b> {{ $clientes->fone }}</b><br>
            EMAIL: <b>{{ $clientes->email }}</b><br>
            DATA DE CADASTRO:<b> {{ $clientes->data_cadastro }}</b><br>
            EMAIL DA FATURA:<b> {{ $clientes->email_fatura }}</b><br>
            SERIAL:<b> {{ $clientes->serial }}</b><br><br>


            <label for="ckLicenca">
                Maxi Recibo PREMIUM
            </label>
            @if (isset($clientes->Permissao->function))
                @if ($clientes->Permissao->ativo === 0)
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="ckLicenca" name="ckLicenca">
                    </div>
                @else
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="ckLicenca" name="ckLicenca"
                            checked>
                    </div>
                @endif
            @else
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="ckLicenca" name="ckLicenca">
                </div>
            @endif


            <script>
                $("#ckLicenca").change(function() {
                    if ($('#ckLicenca').is(":checked")) {
                        var ativo = 1;
                    } else {
                        var ativo = 0;
                    }

                    $.post("{{ route('licenca') }}", {
                        "_token": "{{ csrf_token() }}",
                        id_client: "{{ $clientes->id }}",
                        ativo: ativo
                    }).done(function(retorno) {
                        if (retorno === '1') {
                            if (ativo === 1) {
                                alert('Licença ATIVADA!');
                            } else {
                                alert('Licença DESATIVADA!');
                            }
                        } else {
                            alert('Falha na atualização da licença!');
                        }
                    })

                });
            </script>
        </div>
    </table>
@endsection
