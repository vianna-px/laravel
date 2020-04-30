<?php

//pra criar essa página, eu utilizei o seguinte comando no PowerShell > php artisan make:controller ClienteControlador --resource

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    private $clientes = [
        ['id'=>1,'nome'=>'ademir'],
        ['id'=>2,'nome'=>'joao'],
        ['id'=>3,'nome'=>'maria'],
        ['id'=>4,'nome'=>'aline']
    ];

    //estou construindo essa função para salvar os dados da lista clientes na sessão
    public function __construct()
    {
        //$clientes é o array que está salvo na sessão com o nome $clientes
        $clientes = session('clientes');
        //se não existir $clientes
        if (!isset($clientes))
        {
            //salvar na sessão a lista privada $clientes
            session(['clientes' => $this->clientes]);
        }; //OBS¹: Para isso funcionar, eu preciso alterar a minha public function index() alí embaixo,
           //então irei comentar o que já estava escrito nela e reescrever passando o parâmetro de sessão pra ela
           //~~~~~~~~//
           //OBS²: Além disso, também alterarei a public function store(), para efetuar o salvamento das variáveis 
           //em sessão
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //mas esse não é a forma mais correta de fazer isso, 
    //exemplifico uma forma melhor no arquivo ../teste/resources/views/clientes/index.blade.php
    //    public function index()
    //    {
    //        //ex: utilizado para acessar uma determinada rota e exibir todos os clientes
    //        echo "<ol>";
    //        //para cada itens na lista clientes, como $c
    //        foreach ($this->clientes as $c) {
    //            //print como o nome como <li></li>
    //            echo "<li>" . $c['nome'] . "</li>";
    //        }
    //        echo "</ol>";
    //    }

    public function index()
    {
        //aqui eu recebo a minham lista privada $clientes que eu criei alí em cima
        //$clientes = $this->clientes;

        //aqui eu vou reescrever a forma de obter a lista, coletando dados salvos na sessão
        $clientes = session('clientes');

        //para redirecionar arquivos dentro de uma subpasta, é necessário a utilização do ponto 
        //entre a pasta e o arquivo desejado. Ex: pasta.arquivo;
        //com o método compact eu crio um array com tudo que há dentro de $clientes
            #return view('clientes.index', compact(['clientes']));

        //passando texto a ser aplicado no título
        $texto = "Todos os Clientes";

        //aqui é um outro método pra fazer a exibição no index
        //retorno uma view de clientes, passando o método *with* e dando nome à uma variável ('clientes')
        //e passando um conteúdo pra ela ($clientes)
        /*
        return view('clientes.index')
            ->with('clis',$clientes)
            //aqui eu tô passando um título também pra ser lido
            ->with('titulo', $texto);
        */

        //retornando view passando array associativo
        return view ('clientes.index', 
            ['clientes'=>$clientes, 'titulo'=>$texto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ex: criar um novo cliente

        //para redirecionar arquivos dentro de uma subpasta, é necessário a utilização do ponto 
        //entre a pasta e o arquivo desejado. Ex: pasta.arquivo;
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ex: salvar um novo cliente
        /*
            //Aqui eu vou comentar tudo que eu tinha feito antes de usar a sessão para salvar meus dados
            //pois não quero perder nada
            * //isso é um contador, para pegar o ID do cliente, que é a posição dele no array +1
            * $id = count($this->clientes)+1;
            *
            * //aqui eu extraio o nome do meu request, que vem da label *name="nome"* 
            * //atribuído à minha variável no meu formulário de envio
            * $nome = $request->nome;
            *
            * //isso é para armazenar os dados da requisição na variável $dados
            * //$dados = $request->all();
            *
            * //mas como não preciso salvar o token que vou receber do @csrf, vou salvar só o ID
            * $dados = ["id"=>$id, "nome"=>$nome];
            *
            * //array "clientes" é tudo que eu aloquei na $dados
            * $this->clientes[] = $dados;
            *
            * //isso é pra exibir o meu array com os dados na tela
            * dd($this->clientes);
            *
            * //retornando todos os dados, voltando para a página index na pasta clientes
            * return redirect()->route('clientes.index');
            *
            * //aqui é só um exemplo de todos os meus clientes exibidos, mas não é a melhor forma de se exibir isso, 
            * //já que, num projeto real, usaríamos um banco de dados
            * //  $clientes = $this->clientes;
            * //  return view('clientes.index', compact(['clientes']));
        */

        //o array $clientes é tudo que está salvo no array $clientes dentro da session
        $clientes = session('clientes');
        //isso é um contador, para pegar o ID do cliente, que é a posição dele no array +1
        $id = end($clientes)['id'] + 1;
        //$nome é o que veio no formulário com o label "nome"
        $nome = $request->nome;
        //dentro do array $dados, guardo em $id a $id q veio da session e guardo em $nome a $nome que veio da session
        $dados = ["id"=>$id, "nome"=>$nome];
        //o array $clientes é o que têm dentro de $dados
        $clientes[] = $dados;
        //a variável de sessão chamada $clientes é tudo que eu gerei e abriguei aqui em $clientes
        session(['clientes' => $clientes]);
        //agora, retorno para o index com todo os meus clientes antigos e novos
        return redirect()->route('clientes.index');

        //OBS: Esse processo é para armazenar o meu novo registro de cliente e adicionar ele à lista que eu já tinha
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // ex: ver uma informação sobre determinado cliente

        //aqui eu obtenho a lista $clientes salva em sessão
        $clientes = session('clientes');
        //aqui eu obtenho a posição do cliente no array, que é o ID -1 
        //(que é o processo contrário ao qual eu defini alí em cima na hora de registrar i ID)
            #$cliente = $clientes[ $id - 1 ];
        $index = $this->getIndex($id, $clientes);
        $cliente = $clientes[ $index ];
        //aqui eu retorno a página Info, dentro da pasta Clientes
        //o método compact() serve para transformar o conteúdo de todas as variáveis que passei em um único array
        return view('clientes.info', compact(['cliente']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // ex: editar informações de determinado cliente

        //aqui eu vou fazer quase a mesma coisa que eu fiz no método show(id) alí em cima
        $clientes = session('clientes');
            #$cliente = $clientes[ $id - 1 ];
        $index = $this->getIndex($id, $clientes);
        $cliente = $clientes[ $index ];
        //a diferença aqui é que eu redirecionarei pra uma view chamada "edit" aqui 
        return view('clientes.edit', compact(['cliente']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // ex: efetivar/atualizar/salvar alterações feitas em um determinado cliente
        //aqui eu vou receber meu array de clientes
        $clientes = session('clientes');
        //isso é para eu retornar meu cliente editado com as novas informações
            # $clientes[ $id - 1 ]['nome'] = $request->nome;
        $index = $this->getIndex($id, $clientes);
        $clientes[ $index ]['nome'] = $request->nome;
        //aqui eu coloco tudo que eu tenho no array session('clientes') no array $clientes 
        session(['clientes' => $clientes]);
        //nesse eu redireciono pro index
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ex: apagar um determinado cliente

        //recebo todos meus clientes
        $clientes = session('clientes');

        //monto um array com meus ID's 
            #$ids = array_column($clientes, 'id');
        //retornar todos ID's dentro do array $ids
            #$index = array_search($id, $ids);
        $index = $this->getIndex($id, $clientes);
        //apagar um único elemento à partir da posição $index
        array_splice($clientes, $index, 1);
        //atualizar o array salvo na sessão
        session(['clientes' => $clientes]);
        //redirecionar pro index, que é onde fica a lista de clientes
        return redirect()->route('clientes.index');
    }

    //essa função serve para fazer busca de cliente pelo ID 
    private function getIndex($id, $clientes){
        //aqui cria uma lista com todos os ID's dentro de $clientes
        $ids = array_column($clientes, 'id');
        //isso faz a busca do ID dentro do array
        $index = array_search($id, $ids);
        //retorna index
        return $index;

        //OBS¹: Tendo construído essa função pra fazer busca pelo ID, 
        // irei comentar as seguintes linhas alí em cima:
        //      $ids = array_column($clientes, 'id');
        //      $index = array_search($id, $ids);

        //OBS²: preciso adicionar $index em todos os lugares que eu estiver acessando o $id - 1
            #$index = getIndex($id, $clientes);
    }
}
