@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <painel titulo="Dashboard">
                    Testanto meu novo Painel!
                    <div class="row">
                        <div class="col-md-4">
                            <caixa qtd="80" titulo="Artigos" url="#" cor="orange" icone="ion ion-pie-graph"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="1500" titulo="Usuários" url="#" cor="#02b4ba" icone="ion ion-ios-people"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="3" titulo="Autores" url="#" cor="#b30033" icone="ion ion-person"></caixa>
                        </div>
                    </div>
                </painel>
            </div>
        </div>
    </div>
@endsection
