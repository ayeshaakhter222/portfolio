<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

protected $fillable = [
       'name',
       'title',
       'major',
       'institute_name',
       'result',
       'duration',
    ];
}
