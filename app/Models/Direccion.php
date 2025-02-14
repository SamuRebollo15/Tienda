<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'pais', 'provincia', 'calle', 'codigo_postal'
    ];

    // Relación inversa con usuarios
    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
