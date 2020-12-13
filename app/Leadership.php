<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description'
    ];
}
