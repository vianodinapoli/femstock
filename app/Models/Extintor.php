<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extintor extends Model
{
    protected $fillable = [
        'numero',
        'agente',
        'peso',
        'localizacao',
        'verificado',
        'proxima_ver',
        
    ];
}
