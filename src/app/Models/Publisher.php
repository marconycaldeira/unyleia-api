<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'publishes';
    protected $fillable = [
        'name'
    ];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
