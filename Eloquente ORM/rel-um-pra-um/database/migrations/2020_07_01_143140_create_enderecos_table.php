<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            //$table->id();
            //TRECHO ADICIONADO INICIALMENTE
            //criando campo para chave primária de cliente 
            $table->integer('cliente_id')->unsigned();
            //fazendo minha constraint
            $table->foreign('cliente_id')->references('id')->on('clientes');
            //criando minha chave primária
            $table->primary('cliente_id');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->string('cep');
            // FIM DO TRECHO ADICIONADO INICIALMENTE
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
