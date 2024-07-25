<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            Book::create([
                'title' => $faker->sentence,
                'publisher' => $faker->company,
                'author' => $faker->name,
                'genre' => $faker->word,
                'book_publication' => $faker->date(),
                'word_count' => $faker->randomNumber(),
                'price' => $faker->randomNumber(2),
            ]);
        }
    }
}