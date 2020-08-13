<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'user_id', 'category_id', 'title', 'slug', 'desc', 'image', 'status',
    ];

    const DRAFT_STATUS = 'draft';
    const PUBLISHED_STATUS = 'published';
    const PRIVATE_STATUS = 'private';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

}
