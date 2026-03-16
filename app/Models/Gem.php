<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gem extends Model
{
    protected $table = 'gems';
    protected $fillable = [
        'diam',
        'weight',
    ];
}

