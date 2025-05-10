<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => 1,
            'name' => 'Tere Liye',
            'description' => 'Tere Liye adalah seorang penulis novel asal Indonesia yang terkenal dengan karya-karyanya yang menyentuh hati.',
            'photo' => 'tere_liye.jpg',
        ],
        [
            'id' => 2,
            'name' => 'Mark Manson',
            'description' => 'Mark Manson adalah seorang penulis dan blogger asal Amerika Serikat yang terkenal dengan buku-bukunya tentang pengembangan diri.',
            'photo' => 'mark_manson.jpg',
        ],
        [
            'id' => 3,
            'name' => 'Masashi Kishimoto',
            'description' => 'Masashi Kishimoto adalah seorang mangaka asal Jepang yang terkenal dengan serial manga Naruto.',
            'photo' => 'masashi_kishimoto.jpg',
        ],
        [
            'id' => 4,
            'name' => 'J.K. Rowling',
            'description' => 'J.K. Rowling adalah seorang penulis asal Inggris yang terkenal dengan seri novel Harry Potter.',
            'photo' => 'jk_rowling.jpg',
        ],
        [
            'id' => 5,
            'name' => 'Stephen King',
            'description' => 'Stephen King adalah seorang penulis asal Amerika Serikat yang terkenal dengan novel-novel horor dan thriller.',
            'photo' => 'stephen_king.jpg',
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
