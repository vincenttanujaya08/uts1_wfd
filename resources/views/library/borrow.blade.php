@extends('layout.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold text-center mb-6">Daftar Peminjam Buku: <span class="text-blue-600">{{ $book->title }}</span></h2>

    @if ($book->borrowers->isEmpty())
    <p class="text-center text-gray-500">Tidak ada yang meminjam buku ini.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">Nama Peminjam</th>
                    <th class="py-3 px-4 text-left">Nomor Telepon</th>
                    <th class="py-3 px-4 text-left">Tanggal Peminjaman</th>
                    <th class="py-3 px-4 text-left">Tanggal Pengembalian</th>
                    <th class="py-3 px-4 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book->borrowers as $borrower)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-4">{{ $borrower->borrower_name }}</td>
                    <td class="py-3 px-4">{{ $borrower->borrower_phone }}</td>
                    <td class="py-3 px-4">{{ $borrower->borrowed_date }}</td>
                    <td class="py-3 px-4">
                        @if ($borrower->return_date)
                        <span class="text-green-600">{{ $borrower->return_date }}</span>
                        @else
                        <span class="text-red-500 font-semibold">Belum dikembalikan</span>
                        @endif
                    </td>

                    <td class="py-3 px-4">
                        @if ($borrower->return_date)
                        <span class="text-green-600">Sudah Dikembalikan</span>
                        @else
                        <form action="{{ route('borrower.return', $borrower->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded w-max">Return Book</button>
                        </form>

                        <form action="{{ route('borrower.delete', $borrower->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-max">Delete Borrower</button>
                        </form>
                        @endif
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection