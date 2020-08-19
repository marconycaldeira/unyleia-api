<?php

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create([
            'name' => 'Machado de Assis',
            'year_of_birth' => 1839,
            'nationality' => 'Brasileiro',
            'gender' => 'M'
        ]);
        
        Author::create([
            'name' => 'Clarice Lispector',
            'year_of_birth' => 1920,
            'nationality' => 'Brasileira',
            'gender' => 'F'
        ]);

        Author::create([
            'name' => 'Guimarâes ROsa',
            'year_of_birth' => 1908,
            'nationality' => 'Brasileiro',
            'gender' => 'M'
        ]);
    }
}
