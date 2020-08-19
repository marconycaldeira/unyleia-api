<?php

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'name' => 'Moderna',
        ]);
        Publisher::create([
            'name' => 'Companhia das Letras',
        ]);
        Publisher::create([
            'name' => 'Rocco',
        ]);
    }
}
