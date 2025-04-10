<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'isbn' => '9781234567890',
            'title' => 'Laut Bercerita',
            'author' => 'Tere Liye',
            'published_year' => 2020,
        ]);

        Book::create([
            'isbn' => '9781234567891',
            'title' => 'Detective Conan',
            'author' => 'Aoyama Gosho',
            'published_year' => 1987,
        ]);

        Book::create([
            'isbn' => '9781234567892',
            'title' => 'Doraemon',
            'author' => 'Fujiko F. Fujio',
            'published_year' => 1965,
        ]);

        Book::create([
            'isbn' => '9781234567893',
            'title' => 'Naruto Shippuden',
            'author' => 'Timothy Teguh',
            'published_year' => 2010,
        ]);
        Book::create([
            'isbn' => '9781234567894',
            'title' => 'Crayon Shincan',
            'author' => 'Bryan Chandra',
            'published_year' => 2034,
        ]);
    }
}
