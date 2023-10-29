@extends('layouts.main')

<div class="flex justify-center items-center h-screen">
    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4 bg-white rounded-lg shadow-md mx-auto">
    <h2 class="text-lg text-black font-semibold">Edit Catatan</h2>
    <form action="{{ route('update.note', ['id' => $note->id]) }}" method="POST">
        @csrf
        @method('PUT') <!-- Tambahkan metode PUT untuk update -->
        <div class="mt-2">
            <input type="text" name="title" value="{{ $note->title }}" class="w-full p-2 border rounded-lg bg-white text-slate-700" placeholder="Judul Catatan">
        </div>
        <div class="mt-2">
            <textarea name="content" class="w-full p-2 border rounded-lg resize-y bg-white text-slate-700" placeholder="Isi Catatan">{{ $note->content }}</textarea>
        </div>
        <div class="mt-2">
            <select name="category" id="category" class="w-full p-2 border rounded-lg bg-white">
                <option value="" disabled>Pilih Kategori</option>
                <option value="Pekerjaan" @if($note->category === 'Pekerjaan') selected @endif class="text-blue-500">Pekerjaan</option>
                <option value="Pribadi" @if($note->category === 'Pribadi') selected @endif class="text-red-500">Pribadi</option>
                <option value="Penting" @if($note->category === 'Penting') selected @endif class="text-orange-500">Penting</option>
                <option value="Belajar" @if($note->category === 'Belajar') selected @endif class="text-green-500">Belajar</option>
                <option value="Proyek" @if($note->category === 'Proyek') selected @endif class="text-purple-500">Proyek</option>
                <option value="Liburan" @if($note->category === 'Liburan') selected @endif class="text-indigo-500">Liburan</option>
                <option value="Rutinitas" @if($note->category === 'Rutinitas') selected @endif class="text-pink-500">Rutinitas</option>
                <option value="Kesehatan" @if($note->category === 'Kesehatan') selected @endif class="text-green-500">Kesehatan</option>
                <option value="Hobi" @if($note->category === 'Hobi') selected @endif class="text-yellow-500">Hobi</option>
                <option value="Teknologi" @if($note->category === 'Teknologi') selected @endif class="text-teal-500">Teknologi</option>
                <option value="Olahraga" @if($note->category === 'Olahraga') selected @endif class="text-blue-500">Olahraga</option>
                <option value="Kuliner" @if($note->category === 'Kuliner') selected @endif class="text-red-500">Kuliner</option>
                <option value="Seni" @if($note->category === 'Seni') selected @endif class="text-orange-500">Seni</option>
                <option value="Tugas Sekolah" @if($note->category === 'Tugas Sekolah') selected @endif class="text-purple-500">Tugas Sekolah</option>
                <option value="Travel" @if($note->category === 'Travel') selected @endif class="text-cyan-500">Travel</option>
                <option value="Musik" @if($note->category === 'Musik') selected @endif class="text-pink-500">Musik</option>
                <option value="Film" @if($note->category === 'Film') selected @endif class="text-yellow-500">Film</option>
                <option value="Buku" @if($note->category === 'Buku') selected @endif class="text-indigo-500">Buku</option>
                <option value="Otomotif" @if($note->category === 'Otomotif') selected @endif class="text-red-500">Otomotif</option>
                <option value="Lainnya" @if($note->category === 'Lainnya') selected @endif class="text-gray-500">Lainnya</option>
            </select>
        </div>        
        <div class="mt-2">
            <button type="submit" class="bg-[91D086] text-white px-4 py-2 rounded-lg hover:bg-[6EA066]">Simpan Perubahan</button>
        </div>
        <div class="mt-2">
            <p class="text-end"><a href="/notes"><i class="fa-solid fa-arrow-left"></i> Kembali</a></p>
        </div>
    </form>
</div>
</div>
