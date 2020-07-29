<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuentros extends Model
{
    protected $fillable = ['pais1', 'pais2', 'estadio','grupo','fecha','hora'];
}
