<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    protected $table = "utente";
    protected $primarykey = "idutente";
    protected $fillable = [];
}
