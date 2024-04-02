<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paioltwo extends Model
{
    protected $fillable = [
        'descricao',
        'data_recebido',
        'numero_lote',
        'data_producao',
        'data_validade',
        'quantidade'
    ];
}
