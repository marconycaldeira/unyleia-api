<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'year_of_birth',
        'nationality',
        'gender'
    ];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
