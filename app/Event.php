<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'eventName',
        'eventDesc',
        'startdate',
        'endate',
        'venue'
        
    ];
}
