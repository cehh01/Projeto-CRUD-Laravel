<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [ //PERMIÇÃO PARA PREENCHER AS COLUNAS DO DATABASE
        'nome',
        'idade',
        'cidade'
    ];
};
