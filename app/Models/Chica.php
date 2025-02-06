<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chica extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    protected $fillable = [
        'nombre', 'apodo', 'email', 'password', 'telefono', 'biografia',
        'tiempo', 'precio', 'pais', 'region', 'provincia', 'pay_metoth',
        'fotoperfil', 'fotoportada', 'provider_id', 'provider_type', 'edad',
        'verificacion', 'ranking', 'onlyfans', 'snapchat', 'instagram', 'web',
        'establecimiento_id', 'establecimiento_type'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function establecimiento()
    {
        return $this->morphTo();
    }
}





