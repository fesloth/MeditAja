@extends('layouts.main')

@include('partials.navbar')

<div class="p-4 max-w-4xl mx-auto mt-20">
    <h1 class="text-3xl font-semibold text-slate-800 mb-8">Selamat Datang di Jurnal Meditasi</h1>

    <div class="mb-6">
        <a href="{{ route('jurnal.create') }}" class="bg-[6EA066] text-white px-6 py-3 rounded hover:bg-[91D086] inline-block">Tambah Catatan Meditasi</a>
    </div>

    @if($journals->count() > 0)
    <div class="grid grid-cols-2 gap-4">
        @foreach($journals as $journal)
        <div class="bg-white p-6 rounded shadow-md">
            <p class="text-gray-500">Tanggal: {{ $journal->date }}</p>
            <p class="text-gray-800 text-lg my-4">{{ $journal->entry }}</p>
            <div class="flex items-center justify-between">
                <a href="{{ route('jurnal.edit', $journal->id) }}" class="text-blue-500 hover:underline h-10">Edit</a>
                <form action="{{ route('jurnal.destroy', $journal->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline w-20">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-6 flex justify-center">
        {{ $journals->links() }}
    </div>
    @else
    <div class="text-center h-screen mx-auto mt-20">
        <p class="text-gray-600 text-lg mb-4">Tidak ada catatan meditasi.</p>
    </div>
    @endif
</div>
