<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residents extends Model
{
    protected $fillable = [
        'name', 'middlename', 'lastname',
    ];
}
