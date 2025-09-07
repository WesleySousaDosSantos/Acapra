<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'animais';


    protected $fillable = [
        'id',
        'nome',
        'especie',
        'raca',
        'idade',
        'peso',
        'genero',
        'porte',
        'cor',
        'vacinado',
        'castrado',
        'vermifugado',
        'microchip',
        'observacoes_saude',
        'historia',
        'descricao',
        'observacoes',
        'status',
        'created_at',
        'updated_at',
        'imagem'
    ];
}
