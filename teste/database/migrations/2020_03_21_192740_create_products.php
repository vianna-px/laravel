<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
     /* 
    OBS: absolutamente TUDO que eu fizer no up(), eu tenho que desfazer no down()
    Exemplo: o objeto Schema que eu criei alí embaixo no up(), eu destruí do down()

    função up() é para atualizar lançando uma nova versão à cada vez que eu fizer um migrate
    */
    public function up()
    {
        /*
        aqui eu tô criando os campos que eu vou ter na minha tabela dentro do objeto Schema,
        utilizando as tipagens de SQL

        OBS: repare que o comando Schema::create é pra CRIAR uma tabela
        */
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('stock');
            $table->double('price');
            $table->string('description')->nullable();// nullable é um atributo que inddica que esse campo pode ser null
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /*
    função down() é para fazer um rollback no último migrate
    */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
