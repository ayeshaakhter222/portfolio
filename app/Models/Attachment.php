<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

class Attachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_featured',
        'path',
        'extension',
        'size',
        'name',
        'actual_name',
        'user_id',
    ];

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function attachmentable()
    {
        return $this->morphTo();
    }
}
