<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- passando a requisição do CSRF -->
    <meta name="csrf-token" content=" {{csrf_token()}} ">
    <style>
        body { padding: 20px; }
    </style>
</head>
<body>
    <main role="main">
        <div class="row"><!-- isso aqui embaixo são só algumas configs do Bootstrap -->
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de Cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- INÍCIO DA TABELA -->
                        <table class="table table-bordered table-hover" id="tabelaprodutos">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Endereço</th>
                                    <th>E-Mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $c)
                                    <tr>
                                        <td>{{ $c->id }}</td>
                                        <td>{{ $c->nome }}</td>
                                        <td>{{ $c->idade }}</td>
                                        <td>{{ $c->endereco }}</td>
                                        <td>{{ $c->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- FIM DA TABELA -->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>