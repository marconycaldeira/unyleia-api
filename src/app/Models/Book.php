<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'author_id',
        'genrer_id',
        'publishe_id'
    ];

    public function author(){
        return belongsTo(Author::class);
    }

    public function genrer(){
        return belongsTo(Genrer::class);
    }

    public function publishe(){
        return belongsTo(Publishe::class);
    }
}
