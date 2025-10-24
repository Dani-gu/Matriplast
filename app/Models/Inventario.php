<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    // Los campos que se pueden asignar en masa
    protected $fillable = [
        'materia_prima',
        'cantidad',
        'tipo',
        'fecha',
    ];

    // Si quieres que fecha se trate como fecha automáticamente
    protected $dates = [
        'fecha',
    ];
}
