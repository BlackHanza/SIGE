<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = "municipio";
    protected $primarykey = "idmunicipio";
    protected $fillable = ['municipio', 'provincia_idprovincia'];
}
