<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = "pagamento";
    protected $primarykey = "idpagamento";
    protected $fillable = ['pagamento_idpagamento','valor', 'comprovativo','numero_operacao'];
}
