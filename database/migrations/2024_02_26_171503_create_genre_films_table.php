<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_genre', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Test1\Film::class)->constrained();
            $table->foreignIdFor(\App\Models\Test1\Genre::class)->constrained();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film_genre');
    }
}
