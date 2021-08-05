<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work_experience extends Model
{
    use HasFactory;

     protected $fillable = [
        'company_name',
        'designation',
        'employment_period_from',
        'employment_period_to',
        'company_address',
    ];
}
