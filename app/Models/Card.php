<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'Name', 'Description'
    ];

    public static $rules = [
        'Name' => 'required|string|max:255',
        'Description' => 'required|string',
    ];
}

