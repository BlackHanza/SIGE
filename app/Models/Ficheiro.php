<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficheiro extends Model
{
    protected $table = "ficheiro";
    protected $primarykey = "idficheiro";
    protected $fillable = ['ficheiro','idservico'];
}
