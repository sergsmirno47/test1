<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'blogs';
    protected $guarded = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tags')->withTimestamps();
    }




    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}
