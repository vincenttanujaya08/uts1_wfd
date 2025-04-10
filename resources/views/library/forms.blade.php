@extends('layout.app')

@section('title', 'Home Page')

@section('content')

<div>
    <h1>{{$book->title}}</h1>
    <h1>{{$book->isbn}}</h1>
</div>
<form action="{{ route('borrower.start') }}" method="POST">
    @csrf
    <input type="hidden" name="book_id" value="{{$book->id}}">

    <div class="flex flex-col gap-2">
        <div class="form-group">
            <label for="borrower_name">Name</label>
            <input type="text" name="borrower_name" id="borrower_name" class="form-control" required>
        </div>


        <div class="form-group">
            <label for="borrower_phone">Phone</label>
            <input type="text" name="borrower_phone" id="borrower_phone" class="form-control" required>
        </div>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-max" type="submit">
            Borrow Book
        </button>

    </div>





    @if ($errors->has('error'))
    <div class="alert alert-danger">
        {{ $errors->first('error') }}
    </div>
    @endif




</form>

@endsection