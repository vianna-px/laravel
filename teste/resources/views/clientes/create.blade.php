<!-- Definindo Layout à ser utilizado -->
@extends('layouts.principal')

<!-- setando titulo da página -->
@section('titulo', 'Novo Cliente')

<!-- Criando sessão -->
@section('conteudo')

<h3>Novo Cliente</h3>
<!-- 
isso aqui é pra redirecionar pro método do meu controlador que eu quero
no caso aqui, redirecionarei pro método store
-->
<form action="{{ route('clientes.store') }}" method="POST">
	<!-- isso cria um input hidden que envia um token para o servidor -->
	@csrf
	<input type="text" name="nome">
	<input type="submit" value="Salvar">
</form>

<!-- Finalizando sessão -->
@endsection