<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
//    protected $table = 'books';
    protected $fillable = ['title', 'publisher', 'author', 'genre', 'book_publication', 'word_count', 'price'];

//    public static function create(array $all)
//    {
//
//    }
}
