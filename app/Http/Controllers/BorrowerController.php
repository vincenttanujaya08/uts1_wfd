<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrower;
use Illuminate\Http\Request;

class BorrowerController extends Controller
{
    public function borrowing(Request $request)
    {

        try {
            $validated = $request->validate(
                [
                    'borrower_name' => 'required',
                    'borrower_phone' => 'required',
                    'book_id' => 'required'
                ]
            );


            Borrower::create([
                'book_id' => $request->book_id,
                'borrower_name' => $request->borrower_name,
                'borrower_phone' => $request->borrower_phone,
                'borrowed_date' => now(),
            ]);

            $book = Book::findOrFail($request->book_id);

            $book->update([
                'status' => 'Borrowed',
            ]);

            return redirect()->route('book.show')->with('success', 'Book successfully borrowed.');
        } catch (\Exception $ex) {
            return back()->withErrors(['error' => 'There was a problem borrowing the book.' . $ex->getMessage()]);
        }
    }

    public function returning($id)
    {
        $borrower = Borrower::findOrFail($id);
        $book = Book::findOrFail($borrower->book_id);

        $borrower->update([
            'return_date' => now(),
        ]);

        $book->update([
            'status' => 'available',
        ]);

        return redirect()->route('book.show');
    }

    public function delete($id)
    {
        $borrow = Borrower::findOrFail($id);
        $borrow->delete();
        return redirect()->route('book.show');
    }
}
