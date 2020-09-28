<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// OBS: Todos os nomes de rotas de acordo com o Resource Controllers eu encontro no link: 
// https://laravel.com/docs/5.5/controllers#resource-controllers

class ArtigosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //testando....
        //return "Ok!";

        //Criando minha lista de migalhas da navegação. 
        //aqui eu passei o json_encode pra ser legível para o javascript
        $listaMigalhas = json_encode([
            ["titulo"=>"Home","url"=>route('home')],
//                                            /\
//                                            |
//                          Aqui é o apelido da minha rota,
//                          o qual eu vejo em /routes/web.php
            ["titulo"=>"Lista de Artigos","url"=>""]
        ]);

        $listaArtigos = json_encode([
            ["id"=>1,"titulo"=>"PHP OO","descricao"=>"C- Curso de PHP Orientado à Objetos","url"=>route('home')],
            ["id"=>2,"titulo"=>"Vue JS","descricao"=>"A- Curso de Vue JS","url"=>route('home')],
            ["id"=>3,"titulo"=>"Javascript","descricao"=>"B- Ensino básico de Javascript","url"=>route('home')]
        ]);
        
        /* aqui eu envio minhas listas para a minha view, 
        setando os caminhos para onde meu controlador irá enviar,
        separado por pontos, que no caso é /admin/artigos/index */
        return view('admin.artigos.index',compact('listaMigalhas','listaArtigos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
