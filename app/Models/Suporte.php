<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suporte extends Model
{
    protected $table = "suporte";
    protected $primarykey = "idsuporte";
    protected $fillable = ['nome','email','mensagem','resposta'];

}

?>