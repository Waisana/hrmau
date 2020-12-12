<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retired extends Model
{
    
    protected $fillable = [
        'surname',
        'otherNames',
        'title',
        'sex',
        'dob',
        'mailadd',
        'nationality',
        'telephone',
        'fax',
        'email',
        'interest',
        'qualification',
        'experience',
        
    ];
}
