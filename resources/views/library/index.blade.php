@extends('layout.app')

@section('title', 'Home Page')

@section('content')

<div class="text-3xl font-bold mb-3">Our Collections</div>

<div class="grid sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-10">

    @foreach($books as $book)
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{$book->title}}</div>
            <p class="font-bold">ISBN : {{$book->isbn}}</p>
        </div>
        <div class="px-6 pt-4 pb-2 flex flex-col gap-2">
            <div class="font-bold">Author</div>
            <div>{{$book->author}}</div>

            <div class="font-bold">Published Year</div>
            <div>{{$book->published_year}}</div>

            <div class="font-bold">Status</div>
            @if($book->status == 'available')
            <div class=" bg-green-400 text-center w-20">Available</div>
            <a href="{{ route('book.borrow', $book->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-max">Borrow This Book</a>
            @else
            <div class=" bg-red-400 text-center w-20">Borrowed</div>
            <a href="{{ route('book.borrow', $book->id) }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded opacity-50 cursor-not-allowed w-max">Borrow This Book</a>
            @endif

            <a href="{{ route('book.history', $book->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded w-max">Who've Borrowed?</a>





        </div>
    </div>
    @endforeach

</div>

@endsection