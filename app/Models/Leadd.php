<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leadd extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'leadds';

    protected $fillable = [
        'account_id',
        'organisation_id',
        'team_id',
        'firstname',
        'lastname',
        'gender',
        'company_name',
        'business',
        'streetname',
        'housenumber',
        'suffix',
        'postcode',
        'city',
        'status',
        'planned_user_id',
        'created_by',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'planned_at' => 'datetime',
        'planned_from' => 'datetime',
        'planned_to' => 'datetime'
    ];
}
