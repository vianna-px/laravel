<!--//aqui e pra eu estar acessando todas as minhas rotas através das páginas que eu tenho -->

<h1>APP</h1>

<!--
OBS: Tomar cuidado com alteracao no nome dos caminhos e rotas que eu estou utilizando esta funcao 
-->

<!--
<div>
	<a href="http://localhost:8000/app/user">User</a><br>
	<a href="http://localhost:8000/app/profile">Profile</a><br>
	<a href="http://localhost:8000/app">App</a><br> 
</div>
-->

<!--
meio alternativo de fazer exatamente o que fiz acima, mas sem ter problema com os nomes e caminhos
-->

<div>
	<a href="{{route('app.user')}}">User</a><br>
	<a href="{{route('app.profile')}}">Profile</a><br>
	<a href="{{route('app')}}">App</a><br>
	<a href="{{route('meusprodutos')}}">MeusProdutos</a><br>
</div>