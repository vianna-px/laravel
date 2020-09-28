<template>
    <!-- criação do meu form, o qual poderá aceitar multiplos tipos de dados -->
    <!-- <form v-bind:class="" v-bind:action="index.html" v-bind:method="post" v-bind:enctype="multipart/form-data"> -->
    <form v-bind:class="css" v-bind:action="action" v-bind:method="defineMethod" v-bind:enctype="enctype">
        <!-- criando a alteração de método para DELETE ou PUT -->
        <input v-if="alterMethod" type="hidden" name="_method" v-bind:value="alterMethod"> <!-- o atributo value pode ser DELETE ou PUT -->
        <!--    /\
                | 
        condição pra existência desse input: se o método requerido for "DELETE" ou "PUT"
        -->

        <!-- criando o token -->
        <input v-if="token" type="hidden" name="_token" v-bind:value="token">
        <!--    /\
                | 
        condição pra existência desse input: se for passado um token
        -->

        <slot></slot>
    </form>
</template>

<script>
    export default {
        /* passando props que irão ser recebidos nos atributos do  */
        props:['css','action','method','enctype','token'],

        /* criando variável pra definir se irá ser utilizado a minha tag de DELETE ou PUT */
        data: function(){
            return {
                alterMethod:""
            }
        },

        /* criando um método computado pra validar o meu Method */
        computed:{
            defineMethod: function(){
                /* transformando em Minúsculo */
                if(this.method.toLowerCase() == "post" || this.method.toLowerCase() == "get"){
                    return this.method.toLowerCase();
                }

                if(this.method.toLowerCase() == "put"){
                    this.alterMethod = "put";
                }

                if(this.method.toLowerCase() == "delete"){
                    this.alterMethod = "delete";
                }

                return "post";
            }
        }
    }
</script>
