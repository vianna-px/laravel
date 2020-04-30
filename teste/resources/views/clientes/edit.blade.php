<!-- Definindo Layout à ser utilizado -->
@extends('layouts.principal')

<!-- setando titulo da página -->
@section('titulo', 'Editar Cliente')

<!-- Criando sessão -->
@section('conteudo')

<h3>Novo Cliente</h3>
<!-- 
aqui eu seleciono pra qual método eu estarei enviando (update) e 
por qual atributo do array estarei selecionando ($cliente['id'])
-->
<form action="{{ route('clientes.update', $cliente['id']) }}" method="POST">
	<!-- isso cria um input hidden que envia um token para o servidor -->
	<!-- aqui eu crio meu token hidden -->
	@csrf
	<!--  -->
	<!-- aqui eu altero meu método de inserção do formulário num atributo hidden, pra fazer a edição de forma correta  -->
	@method('PUT')
	<!-- aqui, como estarei recebendo a edição do meu cliente, uso do valor "nome", que está salvo no meu array cliente -->
	<input type="text" name="nome" value="{{ $cliente['nome'] }}">
	<input type="submit" value="Salvar">
</form>

<!-- Finalizando sessão -->
@endsection