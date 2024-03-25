<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Femviatura extends Model
{
    protected $fillable = [
        'marca',
        'modelo',
        'cor',
        'ano_fabricacao',
        'seguro',
        'inspecao',
        'documento'
    ];
}
