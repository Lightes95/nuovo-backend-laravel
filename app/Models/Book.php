<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function author() {
        return $this->belongsToMany(Author::class);
    }

    public function loan() {
        return $this->hasMany(Loan::class);
    }

    public function publisher() {
        return $this->hasOne(Publisher::class, 'publisher_id');
    }
}
