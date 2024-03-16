<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gemulex32 extends Model
{
    protected $fillable = [
        'diametro',
        'data_recebido',
        'numero_lote',
        'data_producao',
        'data_validade',
        'quantidade'
    ];
}
