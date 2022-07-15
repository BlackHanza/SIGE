<?php

namespace App\Models;
use App\Models\Servico;
use Illuminate\Database\Eloquent\Model;

class Tiposervico extends Model
{
    protected $table = "tipo_servico";
    protected $primarykey = "idtipo_servico";
    protected $fillable = ['tipo_servico','preco'];

    
}
