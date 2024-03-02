<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'tags';
    protected $guarded = false;

    public function blogs()
    {
        return $this->belongsToMany(Blog::class)->withTimestamps();
    }
}
