<?php

namespace App\Models;

use App\Models\Tiposervico;
use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = "servico";
    protected $primaryKey = "idservico";
    protected $fillable = ['tipo_servico_idtipo_servico','funcionario_idfuncionario',
    'utente_idutente','pagamento_idpagamento'];

    /**
     * Get the user that owns the Servico
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    /**
     * Get all of the utentesfo Servico
     *
     * @return \Illuminate\Database\Utente\Relations\HasMany
     */
    public function utentes()
    {
        return $this->hasMany(Pessoa::class, 'idpessoa', 'utente_idutente');
    }

    public function tipos()
    {
        return $this->hasMany(Tiposervico::class, 'idtipo_servico', 'tipo_servico_idtipo_servico');
    }

   
}
