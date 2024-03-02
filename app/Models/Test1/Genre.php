<?php

namespace App\Models\Test1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'genres';
    protected $guarded = false;

    public function films()
    {
        return $this->belongsToMany(Film::class, 'film_genre');
    }
}
