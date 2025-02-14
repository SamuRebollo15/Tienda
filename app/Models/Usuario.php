<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario', 'contraseña', 'rol', 'nombre_completo', 'direccion_id', 'imagen'
    ];

    // Relación con la tabla de direcciones (muchos a uno)
    public function direccion()
    {
        return $this->belongsTo(Direccion::class);
    }
}
