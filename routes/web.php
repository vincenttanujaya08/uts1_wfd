<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('library.welcome');
});


Route::get('/books', [BookController::class, 'showBooks'])->name('book.show');
Route::get('/books/{id}/borrowers', [BookController::class, 'showBorrowers'])->name('book.history');
Route::get('/books/{id}/borrow', [BookController::class, 'showForm'])->name('book.borrow');

Route::post('/borrowers', [BorrowerController::class, 'borrowing'])->name('borrower.start');
Route::put('/borrowers/{id}/return', [BorrowerController::class, 'returning'])->name('borrower.return');
Route::delete('/borrowers/{id}', [BorrowerController::class, 'delete']);
