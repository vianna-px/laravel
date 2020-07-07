@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <tabela-lista 
            v-bind:titulos="['#','Título', 'Descrição']"
            v-bind:itens="[[1,'PHP OO', 'Curso de PHP Orientado à Objetos'], [2,'Vue JS', 'Curso de Vue JS']]"
            criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar"
            ></tabela-lista>
        </painel>
    </pagina>
@endsection
