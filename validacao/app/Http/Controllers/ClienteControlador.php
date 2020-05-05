<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente; //indicando qual Model usar

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //passando array de todos os clientes para a página clientes.blade.php
        $clientes = Cliente::all();
        //retornando view de clientes
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //inserindo minha view de novo cliente
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

/*      //  ##### [EXEMPLIFICANDO TIPOS DE VALIDAÇÃO]
        //criando a validação dos dados para evitar erros de inserção ou campo null
        //OBS: Aqui no validate eu adiciono o nome que coloquei no campo "name" no meu formulário
        $request->validate([
            
            //segue abaixo exemplificações de aplicação de validação 
            //  'nome' => 'required|min:3|max:20|unique:clientes'
            
            'nome' => 'required|min:2|max:255',
            'idade' => 'required',
            'endereco' => 'required|min:3|max:255',
            'email' => 'required|email|unique:clientes'
        ]);
*/
        //  ##### [CUSTOMIZANDO MENSAGENS DE ERRO] #####
        //Criando regras de validação
        $regras = [
            'nome' => 'required|min:2|max:255',
            'idade' => 'required',
            'endereco' => 'required|min:3|max:255',
            'email' => 'required|email|unique:clientes'
        ];

        //criando mensagens à serem retornadas
        $mensagens = [
            ##### GENERALIZANDO VALIDAÇÕES #####
            // generalizando a validação 'required'
            'required' => 'O campo :attribute não pode estar em branco!',
            // generalizando a validação 'min'
            'min' => 'É necessário ter no mínimo 3 caracteres no campo :attribute!',
            // generalizando a validação 'max'
            'max' => 'O campo :attribute pode conter no máximo 255 caracteres!',
            // generalizando a validação 'unique'
            'unique' => 'Este :attribute já está sendo utilizado!',
            // generalizando a validação 'email'
            'email' => 'É necessário inserir um :attribute válido!'


            //'nome.required' => 'É necessário inserir um Nome!',
            //'nome.min' => 'É preciso inserir um nome com pelo menos 2 caracteres!',
            //'nome.max' => 'Nomes só podem conter no máximo 255 caracteres!',
            //'idade.required' => 'É necessário inserir uma idade!',
            //'endereco.required' => 'É necessário inserir um Endereço!',
            //'endereco.min' => 'O Endereço precisa conter ao menos 3 caracteres!',
            //'endereco.max' => 'O Endereço pode conter no máximo 255 caracteres!',
            //'email.required' => 'É necessário inserir um E-Mail!',
            //'email.email' => 'É necessário inserir um E-Mail Válido!',
            //'email.unique' => 'Este email já está sendo ultilizado!'
        ];

        //aplicando minhas regras e mensagens
        $request->validate($regras, $mensagens);

        //efetuando a criação de um novo cliente na minha tabela
        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->idade = $request->input('idade');
        $cliente->endereco = $request->input('endereco');
        $cliente->email = $request->input('email');
        $cliente->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
