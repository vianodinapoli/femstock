<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca_destino',
        'referencia',
        'descricao',
        'data',
        'pecas_entradas',
        'pecas_saidas',
        'quantidade',
        'custo_unitario',
        'custo_total'
    ];

    protected $casts = [
        'data' => 'date',
    ];

    public function getEstoqueAttribute()
    {
        return $this->quantidade - $this->pecas_saidas + $this->pecas_entradas;
    }

    public function getCostoTotalAttribute()
    {
        return $this->quantidade * $this->custo_unitario;
    }
}
