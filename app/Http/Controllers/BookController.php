<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrower;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showBooks()
    {
        $books = Book::all();
        return view('library.index', compact('books'));
    }

    public function showBorrowers($id)
    {
        $book = Book::with('borrowers')->findOrFail($id);
        return view('library.borrow', compact('book'));
    }

    public function showForm($id)
    {
        $book = Book::findOrFail($id);
        return view('library.forms', compact('book'));
    }
}
