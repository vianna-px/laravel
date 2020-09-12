<template>
<div v-bind:class="defineCor">
    <!-- cabeçalho -->
    <div class="panel-heading">{{titulo}}</div>
    <!-- corpo -->
    <div class="panel-body">
        <slot></slot>
    </div>
</div>
</template>

<script>
    export default {
        props:['titulo','cor'],
        computed:{
            defineCor: function(){
        //     retorne o CSS de painel + a cor definida OU a cor padrão
                return "panel "+ (this.cor || "panel-default");
        //                  /\
        //                  |
        // repare que tem um espaço bem aqui!
        // sem esse espaço, o CSS não funciona!
            }
        }
    }
</script>

<style media="screen">
    .blue {
        border-color: #0d4a96;
    }

    .blue > .panel-heading {
        color: #f7f7f7;
        background-color: #0d4a96;
        border-color: #0d4a96;
    }

    .orange {
        border-color: #e85e0d;
    }

    .orange > .panel-heading {
        color: #f7f7f7;
        background-color: #e85e0d;
        border-color: #e85e0d;
    }

</style>
