<!-- Definindo Layout à ser utilizado -->
@extends('layouts.principal')

<!-- setando titulo da página -->
@section('titulo', 'Departamentos')

<!-- Criando sessão -->
@section('conteudo')

<h3>Departamentos</h3>

<!-- ul>li*4 -->
<ul>
    <li>Computadores</li>
    <li>Eletrônicos</li>
    <li>Acessórios</li>
    <li>Roupas</li>
</ul>


<!-- aqui estou inserindo meu componente de alerta -->
<!-- para passar variáveis, eu passo dentro dos colchetes, atribuindo da seguinte forma ['nomeVariavel'=>'conteudoVariavel'] -->
<!--
@component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'info'])
    <p><strong>Erro Inesperado</strong></p>
    <p>Ocorreu um erro inesperado</p>
@endcomponent

@component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'error'])
    <p><strong>Erro Inesperado</strong></p>
    <p>Ocorreu um erro inesperado</p>
@endcomponent

@component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'success'])
    <p><strong>Erro Inesperado</strong></p>
    <p>Ocorreu um erro inesperado</p>
@endcomponent

@component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'warning'])
    <p><strong>Erro Inesperado</strong></p>
    <p>Ocorreu um erro inesperado</p>
@endcomponent
-->

<!--
Aqui vou refazer tudo que fiz acima, com a adaptação que fiz em app/providers/AppServiceProvider.php
-->
@alerta(['titulo'=>'Erro Fatal', 'tipo'=>'info'])
    <p><strong>Erro Inesperado</strong></p>
    <p>Ocorreu um erro inesperado</p>
@endalerta

@alerta(['titulo'=>'Erro Fatal', 'tipo'=>'error'])
    <p><strong>Erro Inesperado</strong></p>
    <p>Ocorreu um erro inesperado</p>
@endalerta

@alerta(['titulo'=>'Erro Fatal', 'tipo'=>'success'])
    <p><strong>Erro Inesperado</strong></p>
    <p>Ocorreu um erro inesperado</p>
@endalerta

@alerta(['titulo'=>'Erro Fatal', 'tipo'=>'warning'])
    <p><strong>Erro Inesperado</strong></p>
    <p>Ocorreu um erro inesperado</p>
@endalerta

<!-- Finalizando sessão -->
@endsection