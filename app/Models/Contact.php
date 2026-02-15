<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'source_type',
        'source_id'
    ];
}
