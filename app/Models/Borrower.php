<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Borrower extends Model
{
    protected $fillable = ['book_id', 'borrower_name', 'borrower_phone', 'borrowed_date', 'return_date'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
