
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/* [CONFIGURANDO O VUEX] */
/* efetuando a importação do VueX */
import Vuex from 'Vuex';

/* indicando ao Vue para usar o VueX */
Vue.use(Vuex);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/* Criando minha loja do VUEX */
const store = new Vuex.Store({
    /* passando objeto de configuração */
    state:{         
        item:{}
        /* esse "itens" aqui embaixo é um objeto */
        /* itens:{teste:"Funcionou!"} /* isso aqui é só um teste */ 
        
        /* Aqui dentro vão os meus produtos */
    },
    /* agora irei definir um método que irá atualizar o meu produto, 
    colocando as informações pra dentro do meu objeto */
    mutations:{
        /* criando um serviço para o meu método */        
        setItem(state,obj){
            state.item = obj;
            /* 
            [EXPLICAÇÃO DA LÓGICA ACIMA]
            Essa lógica aqui é o seguinte: eu vou receber o meu objeto 
            com todos os meus itens (state) e receber o meu novo objeto 
            (obj), aí então meu objeto com todos os meus itens passará 
            a ser o que eu já tinha, mais o meu novo objeto adicionado. */
        }
    }
});


//#############################################################################################################################

/*    este é o nome do meu componente que já veio pronto
                        |
                       \/
 Vue.component('example-component', require('./components/ExampleComponent.vue'));
                                                       /\
                                                       |
                                      esta é minha importação do arquivo

definindo minha rota para meu novo componente */
Vue.component('topo', require('./components/Topo.vue'));
Vue.component('painel', require('./components/Painel.vue'));
Vue.component('caixa', require('./components/Caixa.vue'));
Vue.component('pagina', require('./components/Pagina.vue'));
Vue.component('tabela-lista', require('./components/TabelaLista.vue'));
Vue.component('migalhas', require('./components/Migalhas.vue'));

/* rotas do meu Modal */
Vue.component('modal', require('./components/modal/Modal.vue'));
Vue.component('modallink', require('./components/modal/ModalLink.vue'));

/* rotas do meu formulário */
Vue.component('formulario', require('./components/Formulario.vue'));

const app = new Vue({
    el: '#app',
    /* passando minha loja para o resto do sistema */
    store
});
