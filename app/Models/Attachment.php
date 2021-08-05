<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'attachmentable',
        'Is_featured',
        'path',
        'extension',
        'size',
        'name',
        'actual_name',

    ];
}
