<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    //para saber qual a tabela do banco o model irá representar
    protected $table="usuario";

    protected $fillable = [
      'name',
      'cpf',
      'dataNascimento',
      'sexo',
      'tel',
      'email',
      'cep',
      'end',
      'foto',
    ];
}
