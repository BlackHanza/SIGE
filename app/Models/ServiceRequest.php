<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    //
    protected $fillable = ['service_id', 'user_id',
    'price', 'status'];


    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
