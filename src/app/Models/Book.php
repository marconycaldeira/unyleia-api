<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'author_id',
        'genrer_id',
        'publication_year',
        'publisher_id',
    ];

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function genrer(){
        return $this->belongsTo(Genrer::class);
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
}
