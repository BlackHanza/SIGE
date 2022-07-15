<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = "pessoa";
    protected $primaryKey = "idpessoa";
    protected $fillable = ['municipio_idmunicipio', 'data_nascimento','pai','mae','nome','genero',
    'estado_civil','bi_numero','naturalidade','provincia','morada','n_assento','efeito','distrito', 'filename','bi_pai','bi_mae','comprovativo','assentofile', 'casadofile'];

    public function user()
    {
        $this->hasOne(User::class);
    }
}
