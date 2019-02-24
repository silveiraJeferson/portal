<?php

namespace App\Loto;

use Illuminate\Database\Eloquent\Model;

class Loteria extends Model
{
    protected $fillable = ['id', 'nome', 'qdt_sorteados', 'num_possiveis'];
}
