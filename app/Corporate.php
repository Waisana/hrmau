<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporate extends Model
{
    protected $fillable = [
        'orgName',
        'postalAddress',
        'telephone','dob',
        'fax', 
        'email', 
        'physicalAddress', 
        'contactPerson',
        'title', 
        'sector'
    ];
}
