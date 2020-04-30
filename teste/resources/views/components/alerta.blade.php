<!-- aqui eu estou criando um componente de alerta, para inserir na página outras.departamentos -->

<div class="box {{ $tipo }}">
    <div class="title">{{ $titulo }}</div>
    <!-- aqui eu estou passando o parâmetro para exibir a mensagem que está dentro do meu bloco de componente lá na outra página -->
    <div class="msg">
        {{ $slot }}
    </div>
</div>