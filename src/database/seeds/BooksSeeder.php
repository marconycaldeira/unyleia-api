<?php

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'name' => 'Livro 1',
            'author_id' => 1,
            'publication_year' => 2001,
            'genrer_id' => 1,
            'publisher_id' => 1
        ]);

        Book::create([
            'name' => 'Livro 2',
            'author_id' => 2,
            'publication_year' => 2000,
            'genrer_id' => 2,
            'publisher_id' => 2
        ]);
    }
}
