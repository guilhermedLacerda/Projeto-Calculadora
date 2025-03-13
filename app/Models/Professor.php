<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class professor extends Model
{
    protected $fillable = [
        'nome_completo',
        'email_educacional',
        'cfep',
        'senha'
    ];

}


