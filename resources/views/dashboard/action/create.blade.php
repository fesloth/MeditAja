@extends('layouts.main')

<div class="flex justify-center items-center h-screen">
    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4 bg-white rounded-lg shadow-md mx-auto">
    <h2 class="text-lg font-semibold text-black">Tambah Catatan Baru</h2>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div class="mt-2">
            <input type="text" name="title" placeholder="Judul Catatan" class="w-full p-2 border rounded-lg bg-white">
        </div>
        <div class="mt-2">
            <textarea name="content" placeholder="Isi Catatan" class="w-full p-2 border rounded-lg resize-y bg-white"></textarea>
        </div>
        <div class="mt-2">
          <select name="category" id="category" class="w-full p-2 border rounded-lg bg-white">
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="Pekerjaan">Pekerjaan</option>
                <option value="Pribadi">Pribadi</option>
                <option value="Penting">Penting</option>
                <option value="Belajar">Belajar</option>
                <option value="Proyek">Proyek</option>
                <option value="Liburan">Liburan</option>
                <option value="Rutinitas">Rutinitas</option>
                <option value="Kesehatan">Kesehatan</option>
                <option value="Hobi">Hobi</option>
                <option value="Teknologi">Teknologi</option>
                <option value="Olahraga">Olahraga</option>
                <option value="Kuliner">Kuliner</option>
                <option value="Seni">Seni</option>
                <option value="Tugas Sekolah">Tugas Sekolah</option>
                <option value="Travel">Travel</option>
                <option value="Musik">Musik</option>
                <option value="Film">Film</option>
                <option value="Buku">Buku</option>
                <option value="Otomotif">Otomotif</option>
                <option value="Lainnya">Lainnya</option>
          </select>
      </div>    
        <div class="mt-2">
            <button type="submit" class="bg-[91D086] text-white px-4 py-2 rounded-lg hover:bg-green-600">Simpan Catatan</button>
        </div>
        <div class="mt-2">
            <p class="text-end"><a href="/notes"><i class="fa-solid fa-arrow-left"></i> Back</a></p>
        </div>
    </form>
  </div>
</div>