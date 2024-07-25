<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Http\Resources\BookResourceCollection;
use App\Models\Book;

class BookController extends Controller
{
    public function index(): BookResourceCollection
    {
        return new BookResourceCollection(Book::all());
    }

    public function store(BookRequest $request): \Illuminate\Http\JsonResponse
    {
        $book = Book::create($request->all());

        return response()->json($book, 201);
    }

    public function show(Book $book): Book
    {
//        dd($book);
        return $book;
    }

    public function update(BookRequest $request, Book $book): \Illuminate\Http\JsonResponse
    {
        $book->update($request->all());

        return response()->json($book, 200);
    }

    public function destroy(Book $book): \Illuminate\Http\JsonResponse
    {
        $book->delete();

        return response()->json(null, 204);
    }
}
