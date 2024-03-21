<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anfo extends Model
{
    protected $fillable = [
        'descricao',
        'data_producao',
        'numero_lote',
        'data_validade',
        'quantidade',
        
    ];


    use HasFactory;
}
