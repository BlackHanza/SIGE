<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Pessoa;
use App\Models\Service;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'privilegio_idprivilegio', 'email', 'password','pessoa_idpessoa'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

      /**
     * Get the comments for the blog post.
     */
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'idpessoa', 'pessoa_idpessoa');
    }

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pessoas()
        {
        return $this->hasMany(Pessoa::class, 'idpessoa', 'pessoa_idpessoa');
    }
}
