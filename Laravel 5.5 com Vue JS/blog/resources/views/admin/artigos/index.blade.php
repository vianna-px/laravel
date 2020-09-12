@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
            <tabela-lista 
                v-bind:titulos="['#','Título', 'Descrição']"
                v-bind:itens="[[1,'PHP OO', 'C- Curso de PHP Orientado à Objetos'], [2,'Vue JS', 'A- Curso de Vue JS'], [3, 'Javascript', 'B- Ensino básico de Javascript']]"
                ordem="desc" ordemcol="0"
                criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar"
            ></tabela-lista>
        </painel>
    </pagina>
@endsection
