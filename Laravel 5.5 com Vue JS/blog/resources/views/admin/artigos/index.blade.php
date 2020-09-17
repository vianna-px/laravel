@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
            {{-- adicionando botão do Modal --}}
            {{-- 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#meuModalTeste">Large modal</button>
            --}}

            {{-- segue abaixo meu novo button, o qual irá ser renderizado à partir de componente --}}
            {{-- 
                testando estilo Link: 
                <modallink tipo="link" nome="meuModalTeste" titulo="Criar" css=""></modallink>
            --}}
            {{-- 
                testando estilo button:
                <modallink tipo="button" nome="meuModalTeste" titulo="Criar" css=""></modallink>
            --}}
            {{-- testando estilo default: --}}
            <modallink tipo="button3253425526" nome="meuModalTeste" titulo="Criar" css=""></modallink>

            <tabela-lista 
                v-bind:titulos="['#','Título', 'Descrição']"
                v-bind:itens="[[1,'PHP OO', 'C- Curso de PHP Orientado à Objetos'], [2,'Vue JS', 'A- Curso de Vue JS'], [3, 'Javascript', 'B- Ensino básico de Javascript']]"
                ordem="desc" ordemcol="0"
                criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar"
            ></tabela-lista>
        </painel>
    </pagina>

    {{-- testando meu modal --}}
    <modal nome="meuModalTeste">
        <painel titulo="Adicionar">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <label>
                    <input type="checkbox"> Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </painel>
    </modal>
@endsection
