<!-- Definindo Layout à ser utilizado -->
@extends('layouts.principal')

<!-- setando titulo da página -->
@section('titulo', 'Produtos')

<!-- Criando sessão -->
@section('conteudo')

<h3>Produtos</h3>

<!-- ul>li*4 -->
<ul>
    <li>PC</li>
    <li>Notebook</li>
    <li>Mouse</li>
    <li>Camiseta Polo</li>
</ul>

<!-- Finalizando sessão -->
@endsection