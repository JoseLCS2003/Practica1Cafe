<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCafe extends Model
{
    use HasFactory;
    protected $table = 'tipos_cafe';

    // Columnas que se pueden asignar de forma masiva
    protected $fillable = [
        'categoria',
        'nombre',
        'descripcion',
        'usos',
        'regiones',
        'curiosidades',
    ];
}
