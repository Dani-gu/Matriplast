<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'fecha',
        'temperatura',
        'presion',
        'cantidad_resina',
        'observaciones',
        // opcionales si agregas más adelante:
        // 'diagnostico',
        // 'recomendaciones',
    ];
}
