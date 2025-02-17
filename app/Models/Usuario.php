<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Usuario extends Authenticatable 
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios'; // Especificar la tabla si no es 'users'

    protected $fillable = [
        'usuario', 'email', 'password', 'rol', 'nombre_completo', 'direccion_id', 'imagen_usuario', 'remember_token',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
        'email_verified_at' => 'datetime',
    ];

    // Relación con la tabla de direcciones (muchos a uno)
    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'direccion_id', 'id');

    }
}
