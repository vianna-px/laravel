
<!-- Definindo Layout à ser utilizado -->
@extends('layouts.principal')

<!-- setando titulo da página -->
@section('titulo', 'Informação de Cliente')

<!-- Criando sessão -->
@section('conteudo')

<h3>Informações do Cliente</h3>

<!-- Aqui estou retornando ID e nome do cliente que estão salvos dentro do meu array $cliente -->
<p>ID: {{$cliente['id']}} </p>
<p>Nome: {{$cliente['nome']}} </p>
<br>

<a href="{{ route('clientes.index') }}">Voltar</a>

<!-- Finalizando sessão -->
@endsection