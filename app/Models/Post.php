<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Attachment;
use App\Models\Category;

/**
 * @method static create(array $inputs)
 */
class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'total_views',
        'total_comments',
        'user_id',
    ];

    /**
     * Get all of the tags for the post.
     */
    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachmentable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The roles that belong to the user.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
