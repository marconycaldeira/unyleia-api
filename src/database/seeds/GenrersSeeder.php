<?php

use Illuminate\Database\Seeder;
use App\Models\Genrer;

class GenrersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genrer::create([
            'name' => 'Drama',
        ]);
        Genrer::create([
            'name' => 'Ficção',
        ]);
        Genrer::create([
            'name' => 'Negócios',
        ]);
    }
}
