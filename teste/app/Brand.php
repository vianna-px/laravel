<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//isso vai ser adicionado ao habilitar Soft Delestes alí embaixo
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    //pra usar Soft Deletes, vou habilitá-lo da seguinte forma
    use SoftDeletes;
    //aqui eu estou criando os campos que quero preencher de uma única vez
    protected $fillable = ['name'];
}

