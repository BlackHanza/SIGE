<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegio_has_acesso extends Model
{
    protected $table = "privilegio_has_acesso";
    protected $primarykey = "privilegio_idprivilegio";
    protected $fillable = ['acesso', 'descricao'];
}
