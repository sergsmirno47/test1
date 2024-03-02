<?php

namespace App\Models\Test1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'films';
    protected $guarded = false;

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'film_genre')->withTimestamps();//, 'film_id', 'genre_id'
    }
}
