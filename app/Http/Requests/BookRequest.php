<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function authorize(): true
    {
        return true;
    }

    public function rules()
    {
        if ($this->getMethod() == 'POST') {
            return [
                'title' => 'required|string|max:255',
                'publisher' => 'required|string|max:255',
                'author' => 'required|string|max:255',
                'genre' => 'required|string|max:255',
                'book_publication' => 'required|date',
                'word_count' => 'required|integer',
                'price' => 'required|numeric',
            ];
        } elseif ($this->getMethod() == 'PUT') {
            return [
                'title' => 'sometimes|required|string|max:255',
                'publisher' => 'sometimes|required|string|max:255',
                'author' => 'sometimes|required|string|max:255',
                'genre' => 'sometimes|required|string|max:255',
                'book_publication' => 'sometimes|required|date',
                'word_count' => 'sometimes|required|integer',
                'price' => 'sometimes|required|numeric',
            ];
        }
    }
}