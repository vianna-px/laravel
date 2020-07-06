<template>
    <div class="container">
        <div class="row">
            <div class="defineTamanho">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['tamanho'],
        computed:{
            defineTamanho: function(){
                return "col-md-8 col-md-offset-2";
            }
        }
    }
</script>
