<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'surname',
        'otherNames',
        'sex',
        'institutionName',
        'qualification',
        'target',
        'dob',
        'nationality',
        'telephone',
        'fax',
        'email'
    ];
}
