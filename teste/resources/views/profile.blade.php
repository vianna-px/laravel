<!--//aqui e pra eu estar acessando todas as minhas rotas através das páginas que eu tenho -->

<h1>PROFILE</h1>

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
meio alternativo de fazer exatamente o que fiz acima, mas sem ter problema com os nomes e caminhos;

Essa funcao route replica o que eu passar como rota pra todos os meus links, ou seja, se eu mudasse o nome da rota aqui no código para aplicacao, com o método de cima, eu precisaria mudar de app para aplicacao em todos os links. Com essa funcao, ja noa preciso, porque ela mesma já faz isso
-->

<div>
	<a href="{{route('app.user')}}">User</a><br>
	<a href="{{route('app.profile')}}">Profile</a><br>
	<a href="{{route('app')}}">App</a><br>
	<a href="{{route('meusprodutos')}}">MeusProdutos</a><br>
</div>