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
            'genrer_id' => 1,
            'publishe_id' => 1
        ]);

        Book::create([
            'name' => 'Livro 2',
            'author_id' => 2,
            'genrer_id' => 2,
            'publishe_id' => 2
        ]);
    }
}
