<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = "municipio";
    protected $primarykey = "idmunicipio";
    protected $fillable = ['municipio', ];
}
