<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory; 
    
    
    protected $fillable = [
        'about_me',
        'phone',
        'secondary_email',
        'permanent_address',
        'present_address',
        'designation',
        'gender',
        'birth_date',
        'religion',
        'blood_group',
        'marital status',
    ];

    
}
