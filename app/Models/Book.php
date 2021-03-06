<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsToMany(Author::class, 'books_authors');
    }

    public function loan()
    {
        return $this->hasMany(Loan::class);
    }

    public function publisher()
    {
        return $this->hasOne(Publisher::class, 'publisher_id');
    }
    public function topic()
    {
        return $this->hasMany(Topic::class, 'topic_id');
    }
}
