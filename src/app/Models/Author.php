<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;
    
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
