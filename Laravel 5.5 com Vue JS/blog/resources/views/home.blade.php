@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
        <painel titulo="Dashboard">
            Testanto meu novo Painel!
            <div class="row">
                <div class="col-md-4">
                    <!--                        estou utilizando esse método de referência para fazer uso dos apelidos das minhas rotas,
                                                os quais eu encontro em https://laravel.com/docs/5.5/controllers#resource-controllers
                                                               |
                                                              \/       -->
                    <caixa qtd="80" titulo="Artigos" url="{{route('artigos.index')}}" cor="orange" icone="ion ion-pie-graph"></caixa>
                </div>
                <div class="col-md-4">
                    <caixa qtd="1500" titulo="Usuários" url="#teste2" cor="#02b4ba" icone="ion ion-ios-people"></caixa>
                </div>
                <div class="col-md-4">
                    <caixa qtd="3" titulo="Autores" url="#teste3" cor="#b30033" icone="ion ion-person"></caixa>
                </div>
            </div>
        </painel>
    </pagina>
@endsection
