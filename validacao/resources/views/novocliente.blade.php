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
                        <!-- INÍCIO DO FORMULÁRIO -->
                        <form action="/cliente" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do Cliente</label>    <!--  Aqui embaixo eu tô setando pra alterar a estilização se houver erros -->
                                <input type="text" name="nome" id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }} " placeholder="Nome">
                                <!-- Aqui embaixo eu tô falando pra ele retornar um aviso de campo inválido se estiver incorreto  -->
                                @if ($errors->has('nome'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('nome') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>   <!--  Aqui embaixo eu tô setando pra alterar a estilização se houver erros -->
                                <input type="number" name="idade" id="idade" class="form-control {{ $errors->has('idade') ? 'is-invalid' : '' }}" placeholder="Idade">
                                <!-- Aqui embaixo eu tô falando pra ele retornar um aviso de campo inválido se estiver incorreto  -->
                                @if ($errors->has('idade'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('idade') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço do Cliente</label> <!--  Aqui embaixo eu tô setando pra alterar a estilização se houver erros -->
                                <input type="text" name="endereco" id="endereco" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}" placeholder="Endereço">
                                <!-- Aqui embaixo eu tô falando pra ele retornar um aviso de campo inválido se estiver incorreto  -->
                                @if ($errors->has('endereco'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('endereco') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail do Cliente</label>
                                <input type="text" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="E-Mail">
                                <!-- Aqui embaixo eu tô falando pra ele retornar um aviso de campo inválido se estiver incorreto  -->
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                        </form>
                        <!-- FIM DO FORMULÁRIO -->
                    </div>

                    <!-- TRATAMENTO DE ERRO -->
                    <!-- criando card para retornar os campos em falta no formulário -->
                    <!--
                    @if ($errors->any())
                        <div class="card-footer">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        </div>
                    @endif
                    -->
                    <!-- TRATAMENTO DE ERRO -->
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>