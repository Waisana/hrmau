<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knowledgehub extends Model
{
    protected $fillable = [
        'title',
        'description',
        'document'
   
    ];
}
