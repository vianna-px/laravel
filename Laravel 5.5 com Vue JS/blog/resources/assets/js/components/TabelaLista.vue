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
                <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th style="cursor:pointer" v-on:click="ordenaColuna(index)" v-for="(titulo,index) in titulos">{{titulo}}</th>
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
        props:['titulos','itens','criar','detalhe','editar','deletar','token','ordem','ordemcol'],
        data: function(){
            return {
                buscar:'',
                //criando minhas variáveis que serão responsáveis pela alteração da ordenação da lista
                ordemAux: this.ordem || "asc",
                ordemAuxCol: this.ordemCol || 0
            }
        },
        //criando meu método de submissão de formulário
        methods:{
            executaForm: function(index){
                document.getElementById(index).submit();
            },
            ordenaColuna: function(coluna){
                this.ordemAuxCol = coluna;
                //se a ordem for ascendente, a função altera para descendente, e vice-versa
                if(this.ordemAux.toLowerCase() == "asc"){
                    this.ordemAux = "desc";
                }else{
                    this.ordemAux = "asc";
                }
            }
        },
        computed:{
            lista:function(){
                //aqui é onde eu irei desenvolver meus métodos para ordenar a minha lista, por Título ou ID.

                //atribuindo strings que receberão entrada dados definindo a ordem desejada.
                let ordem = this.ordemAux;
                //essa string vai definir em qual coluna será efetuada a busca
                let ordemCol= this.ordemAuxCol;

                //convertendo dados de string para lower case
                ordem = ordem.toLowerCase();
                //transformando o conteúdo da minha variavel num valor inteiro
                ordemCol = parseInt(ordemCol);

                //definindo condicionamento da ordenação
                if(ordem == "asc"){
                    // RESUMO DA LÓGICA DO MÉTODO DE ORDENAÇÃO:
                    // X é o valor que irá ser retornado, então:
                    // IF
                    // a == b -> retorne 0
                    // a > b -> retorne +X
                    // a < b -> retorne -X
                    this.itens.sort(function(a,b){
                        if (a[ordemCol] > b[ordemCol]) {return 1;}
                        if (a[ordemCol] < b[ordemCol]) {return -1;}
                        return 0;
                    });
                }else{
                    this.itens.sort(function(a,b){
                        if (a[ordemCol] < b[ordemCol]) {return 1;}
                        if (a[ordemCol] > b[ordemCol]) {return -1;}
                        return 0;
                    });
                }
                return this.itens.filter(res => {
                    //aqui dentro eu irei realizar minha filtragem dos itens
                    //criando uma variável dinâmica $k, que realizará busca em 
                    //todos os elementos contidos no artigo (ID, Título e Descrição)
                    for(let k = 0;k<res.length;k++){
//                  EXPLICAÇÃO DA LINHA ABAIXO
//                        Convertendo inteiro para string, 
//                        para não gerar erro de tipo de dado
//                                |
//                               \/
                        if((res[k]+"").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
//                                        /\                                /\
//                                        |                                 |
//                                Convertendo strings para LowerCase para comparar
                            return true;
                        }
                    }
                    return false;
                    });
                    //fazendo retorno de itens para exibição em lista
                    return this.itens;
                }
            }
        }
</script>
