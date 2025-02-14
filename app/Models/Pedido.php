<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    // Definimos los campos que pueden ser asignados masivamente
    protected $fillable = [
        'usuario_id', 'producto_id', 'fecha_compra', 'fecha_aproximada_entrega'
    ];

    /**
     * Relación con el modelo Usuario.
     * Un pedido pertenece a un único usuario.
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    /**
     * Relación con el modelo Producto.
     * Un pedido pertenece a un único producto.
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
