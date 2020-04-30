<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request; 

//redirecionamento de GET

Route::get('/', function () {
    return view('welcome');
});

#   //o parametro que passo entre {chaves} não precisa ter o mesmo nome dos parametros que eu passo 
#   //($na $funcao), mas o que está ($na $funcao) precisa ser o mesmo que eu passo $na $chamada do 
#   //return alí
#   Route::get('/ola/{nome}/{sobrenome}', function($nome, $sobrenome){
#       return "Ola! Seja bem vindo, $nome $sobrenome !";
#   });
#   
#   //o interrogacao que eu coloco no parâmetro da {chave?} torna ele um parâmetro opcional;
#   //o valor que eu atribui a variavel dentro da funcao é o ($valor=padrão) da minha variavel
#   //na ausencia do valor que eu requisitei na {chave?} com interrogacao
#   Route::get('/seunome/{nome?}', function($nome=null){
#       if(isset($nome)){
#           echo "Ola! Seja bem vindo, $nome!";
#       }else{
#           echo "Voce não digitou nenhum nome";
#       };
#   });
#   
#   Route::get('/rotacomregra/{nome}/{n}', function($nome, $n){
#       for($i=0;$i<$n;$i++)
#           echo "Olá! Seja bem vindo, $nome! <br>";
#           //aqui eu adiciono a regra pra {nome} ser somente letra e {n} ser somente numero
#   })  ->where('nome', '[A-Za-z]+')
#       ->where('n', '[0-9]+');
#   
#   //criando prefixo para rota
#   //isso de rotas eu ja aprendi na faculdade, então nao vou ficar me matando de explicar aq nn, namoral
#   //porém é o seguinte, aqui eu tô definindo rota à dentro de outra rota
#   //analisando o código abaixo, eu tô dizendo o seguinte:
#   //dentro da rota /app, eu vou declarar as rotas /user com a string Meu User e a rota /profile com a string Meu Perfil
#   //e para a rota /app sem nada na frente, vou emitir a string Meu App

#   Route::prefix('/app')->group(function() {
#       
#       Route::get('/', function() {
#           return "Meu App";
#       });
#   
#       Route::get('/user', function() {
#           return "Meu Usuário";
#       });
#   
#       Route::get('/profile', function() {
#           return "Meu Perfil";
#       });
#   
#   });

#   //aqui a mesma coisa que eu fiz alí em cima, porém, com views ao invés de strings
#   Route::prefix('/app')->group(function() {
#       
#       Route::get('/', function() {
#           return view('app');
#       });
#       Route::get('/user', function() {
#           return view('user');
#       });
#       Route::get('/profile', function() {
#           return view('profile');
#       });
#   });

#   //aqui a mesma coisa que eu fiz alí em cima, porém, estarei atribuindo novos nomes às rotas que estou utilizando
#   Route::prefix('/aplicacao')->group(function() {
#       
#       Route::get('/', function() {
#           return view('app');
#       })->name('app');
#   
#       Route::get('/user', function() {
#           return view('user');
#       })->name('app.user'); //necessariamente nao precisa ser root.file, pode ser root_file ou rootfile, etc. Estou separando assim pra eu saber que é /app/user
#   
#       Route::get('/profile', function() {
#           return view('profile');
#       })->name('app.profile');
#   });
#   
#   //redirecionando para uma lista de produtos
#   Route::get('/produtos', function(){
#       echo "<h1>Produtos</h1>";
#       echo "<ol>";
#       echo "<li>Notebook</li>";
#       echo "<li>Impressora</li>";
#       echo "<li>Mouse</li>";
#       echo "</ol>";
#   })->name('meusprodutos');
#   
#   //redirecionamento de rotas
#   //Route::redirect('rota a ser coletada', 'rota a ser encaminhada', 301);
#   Route::redirect('todosprodutos1', 'produtos', 301);
#   
#   //maneira alternativa de fazer o redirecionamento (essa é a mais utilizada)
#   // todosprodutos2 = rota recebida, meusprodutos = rota encaminhada
#   Route::get('todosprodutos2', function() {
#       return redirect()->route('meusprodutos');
#   });
#   
#   ###################################################################################
#   
#   //redirecionamento de POST
#   //quando eu requisitar isso ao server, irá gerar o erro 419, que é quando há alguém logado e uma outra entidade tenta executar um script
#   //para obter informações do servidor;
#   //Pra resolver isso, vou ao seguinte caminho app/Http/VerifyCsrfToken.php e a partir de lá, dentro de uma [WARD] eu explico como resolve isso
#   
#   //$request irá salvar os dados que estão chegando nessa rota
#   Route::post('/requisicoes', function(Request $request){
#       return 'Hello POST';
#   });
#   
#   //aqui eu posso fazer o tratamento de todos os métodos que tenho para o meu Http
#   Route::delete('/requisicoes', function(Request $request){
#       return 'Hello DELETE';
#   });
#   
#   Route::put('/requisicoes', function(Request $request){
#       return 'Hello PUT';
#   });
#   
#   Route::patch('/requisicoes', function(Request $request){
#       return 'Hello PATCH';
#   });
#   
#   Route::options('/requisicoes', function(Request $request){
#       return 'Hello OPTIONS';
#   });
#   
#   Route::get('/requisicoes', function(Request $request){
#       return 'Hello GET';
#   });


//administrando rotas com controlador
//Route::get('requisicao', 'NomeDoMeuControlador@NomeDoMetodoQueVouChamar');
//  Route::get('produtos', 'MeuControlador@produtos');

#aqui eu fiz o seguinte: atribuí uma função à uma rota, que retorna a view 'produtos' e nomeei a rota como 'produtos'
Route::get('produtos', function() {
    return view('outras.produtos');
})->name('produtos');

#aqui a mesma coisa: atribuí uma função à uma rota, que retorna a view 'departamentos' e nomeei a rota como 'departamentos'
Route::get('departamentos', function() {
    return view('outras.departamentos');
})->name('departamentos');

Route::get('nome', 'MeuControlador@getNome');

Route::get('idade', 'MeuControlador@getIdade');

Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

#########################################################################################

//criando função para redirecionar o usuário para os 7 métodos criados no ClienteControlador.php
//aqui eu linkei uma rota para todos os métodos e ele me gerou caminhos e métodos pré-definidos para o tratamento do redirecionamento
Route::resource('clientes', 'ClienteControlador');

//passando uma rota com parâmetro opcional
Route::get('opcoes/{opcao?}', function($opcao=null) {
    return view('outras.opcoes',compact(['opcao']));
})->name('opcoes');

Route::get('bootstrap', function () {
    return view('outras.exemplo');
});