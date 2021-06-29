<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsToMany(Book::class, 'books_authors');
    }
}
