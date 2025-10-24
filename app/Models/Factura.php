<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'cliente',
        'fecha',
        'monto_total',
        'detalle',
    ];

    // Para que 'fecha' sea tratado como fecha automáticamente
    protected $dates = [
        'fecha',
    ];
}
