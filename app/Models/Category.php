<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
    ];
    /**
     * The users that belong to the role.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
