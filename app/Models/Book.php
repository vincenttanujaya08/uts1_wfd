<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Borrower;

class Book extends Model
{
    protected $fillable = ['isbn', 'title', 'author', 'published_year', 'status'];

    public function borrowers()
    {
        return $this->hasMany(Borrower::class);
    }
}
