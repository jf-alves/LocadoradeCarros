<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    //para saber qual a tabela do banco o model irá representar
    protected $table="carros";

    protected $fillable = [
      'marca',
      'modelo',
      'cor',
      'qtPorta',
      'ano',
      'foto',
      'qtCarro',
    ];
}
