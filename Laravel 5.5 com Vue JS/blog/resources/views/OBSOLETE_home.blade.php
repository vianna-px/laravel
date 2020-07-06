@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard" cor="panel-primary">
                    Testanto meu novo Painel!
                    <div class="row">
                        <div class="col-md-4">
                            <painel titulo="Sub-menu em linha 1" cor="blue">
                                Testanto meu novo Sub-menu!
                            </painel>
                        </div>
                        <div class="col-md-4">
                            <painel titulo="Sub-menu linha 2" cor="panel-danger">
                                Testanto meu novo Sub-menu!
                            </painel>
                        </div>
                        <div class="col-md-4">
                            <painel titulo="Sub-menu linha 3" cor="orange">
                                Testanto meu novo Sub-menu!
                            </painel>
                        </div>
                    </div>
                </painel>
            </div>
        </div>
    </div>
@endsection
