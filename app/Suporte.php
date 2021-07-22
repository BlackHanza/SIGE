<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suporte extends Model
{
    protected $table = "suporte";
    protected $primarykey = "idsuporte";
    protected $fillable = ['mensagem','nome','email','resposta'];
}
