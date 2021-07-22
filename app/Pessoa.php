<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = "pessoa";
    protected $primarykey = "idpessoa";
    protected $fillable = ['municipio_idmuicipio', 'data_nascimento',
    'pai','mae','nome','genero','estado_civil','bi_numero'];
}
