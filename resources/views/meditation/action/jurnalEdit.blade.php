@extends('layouts.main')

<div class="p-4 max-w-md mx-auto mt-28 bg-white">
    <h1 class="text-xl font-semibold mb-4 text-slate-800">Edit Catatan Meditasi</h1>
    <form action="{{ route('jurnal.update', $journal->id) }}" method="POST" style="background-color: #f5f5f5; padding: 20px; border-radius: 8px;">
        @csrf
        @method('PUT')

        <div class="mb-4 rounded p-4">
            <label for="date" class="block text-gray-600">Tanggal:</label>
            <input type="date" name="date" id="date" class="w-full p-2 border rounded bg-white text-slate-700" value="{{ $journal->date }}">
        </div>

        <div class="mb-4 rounded p-4">
            <label for="entry" class="block text-gray-600">Catatan Meditasi:</label>
            <textarea name="entry" id="entry" class="w-full p-2 border rounded bg-white text-slate-700" rows="4">{{ $journal->entry }}</textarea>
        </div>

        <div>
            <button type="submit" class="bg-[6EA066] text-white px-4 py-2 rounded hover:bg-[91D086]">Simpan Perubahan</button>
        </div>
    </form>

    <div class="mt-4">
        <a href="/jurnal" class="text-[6EA066] text-sm hover:underline">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
        </a>
    </div>
</div>
