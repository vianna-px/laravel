<template>
    <div>
        <div class="form-inline">
            <a v-if="criar" v-bind:href="criar">Criar</a>
            <div class="form-group pull-right">
                <!-- barra de busca -->
                <!-- 
                                            Variável que irá receber a busca que o usuário irá efetuar na barra
                                                                                            |
                                                                                           \/             -->
                <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">{{buscar}}
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th v-for="titulo in titulos">{{titulo}}</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <!-- 
                    Trazendo meu ID específico do Item
                                | 
                               \/                      -->
                <tr v-for="(item,index) in lista">
                    <td v-for="i in item">{{i}}</td>
                    <td v-if="detalhe || editar || deletar">
                        <!-- 
                        Atribuindo o valor Index ao ID
                                      |
                                     \/          --><!-- -->
                        <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
                            <!-- Esse campo está alterando o método Post para Delete -->
                            <input type="hidden" name="_method" value="DELETE">
                            <!-- Esse aqui está fazendo a importação do Token -->
                            <input type="hidden" name="_token" v-bind:value="token">

                            <a v-if="detalhe" v-bind:href="detalhe">Detalhe | </a>
                            <a v-if="editar" v-bind:href="editar">Editar | </a>
                            <!-- 
                                                Aplicando método de submissão
                                                            |
                                                           \/            -->
                            <a href="#" v-on:click="executaForm(index)">Deletar</a>
                        </form>
                        <!-- Exibir somente se não houver um Token -->
                        <span v-if="!token">
                            <a v-if="detalhe" v-bind:href="detalhe">Detalhe | </a>
                            <a v-if="editar" v-bind:href="editar">Editar | </a>
                            <a v-if="deletar" v-bind:href="deletar">Deletar</a>
                        </span>
                        <!-- Exibir somente se houver um Token e não haver um Deletar -->
                        <span v-if="token && !deletar">
                            <a v-if="detalhe" v-bind:href="detalhe">Detalhe | </a>
                            <a v-if="editar" v-bind:href="editar">Editar | </a>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props:['titulos','itens','criar','detalhe','editar','deletar','token'],
        data: function(){
            return {
                buscar:''
            }
        },
        //criando meu método de submissão de formulário
        methods:{
            executaForm: function(index){
                document.getElementById(index).submit();
            }
        },
        computed:{
            lista:function(){
                let busca = "php";
                return this.itens.filter(res => {
                    //aqui dentro eu irei realizar minha filtragem dos itens
                    //return true;
                });
                //fazendo retorno de itens para exibição em lista
                return this.itens;
            }
        }
    }
</script>
