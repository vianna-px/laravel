<!--  -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-08">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- passando parâmetro dinâmico para o título -->
        <title>@yield('titulo')</title>
        <!-- 
        Estou passando o "asset()" que redirecionará para o meu arquivo CSS 
        ( somente para pastas à partir da pasta /public)
         -->
        <link rel="stylesheet" href=" {{ asset('css/principal.css') }} ">
    </head>

    <body>
        <!-- 
            Utilizei o seguinte comando pra gerar a lista: 
            div.row>div.col1>ul>li*3
        -->
        <div class="row">
            <div class="col1">
                <!-- Criando um menu -->
                <div class="menu">
                    <ul>
                        <!--
                        No class alí, eu estou dizendo: 
                        no  meu Request(), se a minha rota for qualquer coisa dentro da pasta clientes, class='active', caso contrário class=''
                        -->
                        <li>
                            <a class="{{request()->routeIs('clientes.*') ? 'active' : ''}}" href="{{route('clientes.index')}}">
                                Clientes
                            </a>
                        </li>

                        <!--
                        No class alí, eu estou dizendo: 
                        no  meu Request(), se a minha rota for produtos, class='active', caso contrário class=''
                        -->
                        <li>
                            <a class="{{request()->routeIs('produtos') ? 'active' : ''}}" href="{{route('produtos')}}">
                                Produtos
                            </a>
                        </li> 

                        <!--
                        No class alí, eu estou dizendo: 
                        no  meu Request(), se a minha rota for departamentos, class='active', caso contrário class=''
                        -->
                        <li>
                            <a class="{{request()->routeIs('departamentos') ? 'active' : ''}}" href="{{route('departamentos')}}">
                                Departamentos
                            </a>
                        </li>
                        <li>
                            <a class="{{request()->routeIs('opcoes') ? 'active' : ''}}" href="{{route('opcoes')}}">
                                Opcoes
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col2">
                <!-- Importando sessão -->
                @yield('conteudo')
            </div>
        </div>
    </body>
</html>
