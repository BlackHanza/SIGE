<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acesso extends Model
{
    protected $table = "acesso";
    protected $primarykey = "idacesso";
    protected $fillable = ['acesso', 'descricao'];

}
