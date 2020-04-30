<!--  -->

<!-- Definindo Layout à ser utilizado -->
@extends('layouts.principal')

<!-- setando titulo da página -->
@section('titulo', 'Clientes')

<!-- Criando sessão -->
@section('conteudo')

	<!-- <h3>Clientes: </h3> -->
	<!-- Aqui, como qu usei uma adaptação de título no meu controlador, vou comentar a linha acima e usar a de baixo -->
	<h3> {{ $titulo }} </h3>

	<a href="{{ route('clientes.create') }}">Novo Cliente</a>

	<!-- Criando um IF do blade para printar se existirem dados no array $clientes -->
	@if(count($clientes)>0)

		<ul>
			<!-- para cada itens na lista clientes, como $c -->
			@foreach ($clientes as $c)
			<!-- print como o nome como <li></li> -->
				<li>
					<!-- Isso é para exibir o ID e o nome na minha lista de clientes -->
					{{ $c['id'] }} | {{ $c['nome'] }} |
					<!-- aqui estou passando um link para a edição de cada cliente que 
						é estabelecido de acordo com o ID de cada cliente-->
					<a href="{{ route('clientes.edit', $c['id']) }}">Editar</a> |
					<a href="{{ route('clientes.show', $c['id']) }}">Info</a>
					<!-- 
					aqui eu seleciono pra qual método eu estarei enviando (destroy) e 
					por qual atributo do array estarei selecionando ($cliente['id'])
					-->
					<form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
						<!-- isso cria um input hidden que envia um token para o servidor -->
						<!-- aqui eu crio meu token hidden -->
						@csrf
						<!--  -->
						<!-- aqui eu altero meu método de inserção do formulário num atributo hidden, pra fazer a edição de forma correta  -->
						@method('DELETE')
						<!-- aqui, como estarei recebendo o delete do meu cliente, uso do valor "nome", que está salvo no meu array cliente -->
						<input type="submit" value="Apagar">
					</form>
				</li>		
			@endforeach
		</ul>

		<hr>
		<!-- Maneiras de se fazer um loop -->
		<!-- Um loop básico da $i, enquanto $i for menor que 10, printa $i na tela -->
		@for($i=0;$i<10;$i++)
			{{ $i }},
		@endfor
		<br>

		<!-- Aqui o $i é o nome de cada cliente dentro do array $clientes -->
		@for($i=0;$i<count($clientes);$i++)
			{{ $clientes[$i]['nome'] }},
		@endfor
		<br>

		<!-- Assim parece mais fácil, mas não posso me esquecer de usar { {...} } pro laravel cconseguir acessar as variáveis -->
		@foreach ($clientes as $c)
			<p>
				{{ $c['nome'] }} |
				<!-- Agora vou fazer a checagem do primeiro e do último item da lista -->
				@if ($loop->first)
					(primeiro) |
				@endif
				@if ($loop->last)
					(ultimo) |
				@endif
				<!-- 
				Isso é para printar os índices das variáveis, em seguida, o número de interações com  o item
				e então, o número total de itens na lista 
				-->	
				({{ $loop->index }}) - {{ $loop->iteration }} / {{ $loop->count }}
			</p>
		@endforeach

	@else

		<h4>Não existem usuários cadastrados!</h4>

	@endif


	<!-- Utilizando o comando empty para tratamento de array vazio, que é a mesma coisa que o else fez alí -->
	@empty($clientes)
		<h4>Não existem usuários cadastrados!</h4>
	@endempty

<!-- Finalizando sessão -->
@endsection