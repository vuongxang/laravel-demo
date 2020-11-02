<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'id',
        'name',
        'desc',
        'time',
        'status',
        'created_by'
    ];
}
