<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BookResourceCollection extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->transform(function($book){
                return [
                    'id' => $book->id,
                    'title' => $book->title,
                    'publisher' => $book->publisher,
                    'author' => $book->author,
                    'genre' => $book->genre,
                    'book_publication' => $book->book_publication,
                    'word_count' => $book->word_count,
                    'price' => $book->price
                ];
            }),
        ];
    }
}