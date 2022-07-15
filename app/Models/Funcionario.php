<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Funcionario extends Model
{
    protected $table = "funcionario";
    public $timestamps = false;
    protected $primarykey = "idfuncionario";
    protected $fillable = ['idfuncionario'];

    /**
     * Get all of the pessoas for the Funcionario
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pessoas()
    {
        return $this->hasMany(Pessoa::class, 'idpessoa', 'idfuncionario');
    }
    public function utilizadores()
    {
        return $this->hasMany(User::class, 'pessoa_idpessoa', 'idfuncionario');
    }
}
