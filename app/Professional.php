<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $fillable = [
        'surname',
        'otherNames',
        'sex',
        'title',
        'dob',
        'nationality',
        'mailingAdd', 
        'telephone',
        'fax', 
        'email', 
        'interest', 
        'experience',
        'employer',
        'jobTitle',
        'employerEmail',
        'employerLocation',

    ];
}
