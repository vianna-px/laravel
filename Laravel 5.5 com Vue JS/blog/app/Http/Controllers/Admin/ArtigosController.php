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
            ["titulo"=>"Lista de Compras","url"=>""]
        ]);
        
        //aqui eu seto os caminhos que meu controlador irá requisitar,
        //separado por pontos, que no caso é /admin/artigos/index
        return view('admin.artigos.index',compact('listaMigalhas'));
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
