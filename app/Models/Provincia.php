<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = "provincia";
    protected $primarykey = "idprovincia";
    protected $fillable = ['provincia'];
}
