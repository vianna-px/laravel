<template>
    <ol class="breadcrumb">
        <li v-for="item in lista"><a v-if="item.url" v-bind:class="defineClass" v-bind:href="item.url">{{item.titulo}}</a><span v-if="!item.url">{{item.titulo}}</span></li>
        <!--  marquei tudo isso aqui como comentário porque não quero perder o que usei para testar o breadcrumbs
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li> 
        <li class="active">Data</li>
        -->
    </ol>
</template>

<script>
    export default {
        /*
        nesse bloco, eu estou recebendo meus dados do index.blade.php, 
        passados pelo método index() do ArtigosController.php, 
        e exibindo eles no console, para testar a funcionalidade da lógica
        */
        props:['lista'],
        /*
        //esse mounted aqui é o teste da funcionalidade 
        mounted:function(){
            console.log(this.lista);
        }
        */
       computed:{
           defineClass: function(){
               if(this.url){
                   return "active";
               }else{
                   return "";
               }
           }
       }
    }
</script>