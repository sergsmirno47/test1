<?php

namespace App\Models\Test1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FilmGenre extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'film_genre';
    protected $guarded = false;
}
