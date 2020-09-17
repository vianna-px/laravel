<template>
<!-- classe em branco pra ser setada opcionalmente mais pra frente -->
<div class="">
    <!--                Aqui eu atribuo um nome dinâmico vindo em seguida de uma hashtag, o qual eu irei atribuir o ID desejado             
                                                                                                 |   
                                                                                                \/                   -->
    <button v-if="!tipo || (tipo != 'button' && tipo != 'link')" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
    <!-- esse primeiro botão é o padrão, caso não seja definido um 'tipo' no props -->

    <!-- esse segundo, é caso o 'tipo' no props seja 'button' -->
    <button v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>

    <!-- esse terceiro, é caso o 'tipo' no props seja 'link' -->
    <a v-if="tipo == 'link'" href="" data-toggle="modal" v-bind:class="css || ''" v-bind:data-target="'#' + nome">{{titulo}}</a>
</div>
</template>

<script>
    export default {
        props:['tipo','nome','titulo','css']
    }
</script>
