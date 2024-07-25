<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_book()
    {
        $response = $this->postJson('/api/books', [
            'title' => 'Test Book',
            'publisher' => 'Test Publisher',
            'author' => 'Test Author',
            'genre' => 'Test Genre',
            'book_publication' => '2022-01-01',
            'word_count' => 50000,
            'price' => 19.99,
        ]);

        $response->assertStatus(201)->assertJson([
            'title' => 'Test Book',
        ]);

        $this->assertDatabaseHas('books', [
            'title' => 'Test Book',
        ]);
    }
}

