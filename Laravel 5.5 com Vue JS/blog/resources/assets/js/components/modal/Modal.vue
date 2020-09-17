<template>
    <!-- 
        A seguinte estrutura de códigos eu obtive no link:
        https://getbootstrap.com/docs/3.3/javascript/#modals-sizes
     -->

     <!--             este é o nome que uso para referenciar meu Modal
                                     |
                                    \/       
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                                                                /\
                                                                                                |
                                                                isso aqui também faz a mesma referência de nome ao meu modal
    -->
    <!-- mas irei trabalhar com ID, para ter mais otimização no meu aplicativo, 
    portanto irei removê-lo e aplicar o meu ID. Além disso, irei também deixar 
    o atributo aria-labelledby em branco e passarei um props para torná-lo dinâmico,
    aplicando também o v-bind em ambos atributos -->
    <div v-bind:id="nome" class="modal fade" tabindex="-1" role="dialog" v-bind:aria-labelledby="nome">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!-- aqui eu altero o conteúdo que peguei no site para um slot, pra que fique dinâmica a sua aplicação -->
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['nome']
    }
</script>
