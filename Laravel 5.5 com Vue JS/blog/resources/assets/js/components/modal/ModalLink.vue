<template>
<!-- classe em branco pra ser setada opcionalmente mais pra frente -->
<span class="">

    <!-- esse primeiro span é caso haja informações passadas no meu atributo "item", lá em TabelaLista.vue -->
    <span v-if="item">
        <!-- esse bloco com dois botões e um link aqui é a mesma coisa que o de baixo com algumas alterações do preenchimento, só removi os comentários -->
        <button v-on:click="preencheFormulario()" v-if="!tipo || (tipo != 'button' && tipo != 'link')" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
        <button v-on:click="preencheFormulario()" v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
        <a v-on:click="preencheFormulario()" v-if="tipo == 'link'" href="#" data-toggle="modal" v-bind:class="css || ''" v-bind:data-target="'#' + nome">{{titulo}}</a>
    </span>

    <!-- esse segundo span é caso não haja nenhuma informação no atributo "item" -->
    <span v-if="!item">
        <!--                Aqui eu atribuo um nome dinâmico vindo em seguida de uma hashtag, o qual eu irei atribuir o ID desejado             
                                                                                                    |   
                                                                                                    \/                   -->
        <button v-if="!tipo || (tipo != 'button' && tipo != 'link')" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
        <!-- esse primeiro botão é o padrão, caso não seja definido um 'tipo' no props -->

        <!-- esse segundo, é caso o 'tipo' no props seja 'button' -->
        <button v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>

        <!-- esse terceiro, é caso o 'tipo' no props seja 'link' -->
        <a v-if="tipo == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</a>
    </span>

</span>
</template>

<script>
    export default {
        props:['tipo','nome','titulo','css','item'],
        methods:{
            preencheFormulario:function(){
                this.$store.commit('setItem',this.item); /* com essa linha eu atualizo a minha loja */
            }
        }
    }
</script>
