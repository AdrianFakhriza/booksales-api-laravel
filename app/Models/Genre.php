<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // private $genres = [
    //     [
    //         'id' => 1,
    //         'name' => 'Fiksi',
    //         'description' => 'Genre fiksi adalah genre yang berisi cerita yang tidak nyata atau imajinatif.',
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Non-Fiksi',
    //         'description' => 'Genre non-fiksi adalah genre yang berisi cerita yang berdasarkan fakta atau kenyataan.',
    //     ],
    //     [
    //         'id' => 3,
    //         'name' => 'Fantasi',
    //         'description' => 'Genre fantasi adalah genre yang berisi cerita yang mengandung unsur-unsur magis atau supernatural.',
    //     ],
    //     [
    //         'id' => 4,
    //         'name' => 'Romantis',
    //         'description' => 'Genre romantis adalah genre yang berisi cerita yang berfokus pada hubungan cinta antara karakter.',
    //     ],
    //     [
    //         'id' => 5,
    //         'name' => 'Horor',
    //         'description' => 'Genre horor adalah genre yang berisi cerita yang bertujuan untuk menakut-nakuti pembaca.',
    //     ],

    // ];

    // public function getGenres()
    // {
    //     return $this->genres;
    // }

    protected $table = 'genres';
}
