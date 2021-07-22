<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = "servico";
    protected $primarykey = "idservico";
    protected $fillable = ['tipo_servico_idtipo_servico','funcionario_idfuncionario',
    'utente_idutente','pagamento_idpagamento'];
}
