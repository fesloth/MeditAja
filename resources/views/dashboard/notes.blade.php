@extends('layouts.main')

@include('partials.navbar')

<div class="container mx-auto mt-8 text-center"><!-- Form untuk saring berdasarkan kategori -->
<div class="mt-32">
  <form action="{{ route('notes.filter') }}" method="GET" class="flex justify-center items-center">
      <select name="category" class="w-44 px-1 py-2 border rounded-l-lg bg-white">
        <option value="" disabled selected>Pilih Kategori</option>
        <option value="">Semua Kategori</option>
        <option value="Pekerjaan" class="text-blue-500">Pekerjaan</option>
        <option value="Pribadi" class="text-red-500">Pribadi</option>
        <option value="Penting" class="text-orange-500">Penting</option>
        <option value="Belajar" class="text-green-500">Belajar</option>
        <option value="Proyek" class="text-purple-500">Proyek</option>
        <option value="Liburan" class="text-indigo-500">Liburan</option>
        <option value="Rutinitas" class="text-pink-500">Rutinitas</option>
        <option value="Kesehatan" class="text-lime-500">Kesehatan</option>
        <option value="Hobi" class="text-yellow-500">Hobi</option>
        <option value="Teknologi" class="text-teal-500">Teknologi</option>
        <option value="Olahraga" class="text-blue-700">Olahraga</option>
        <option value="Kuliner" class="text-red-700">Kuliner</option>
        <option value="Seni" class="text-orange-700">Seni</option>
        <option value="Tugas Sekolah" class="text-purple-700">Tugas Sekolah</option>
        <option value="Travel" class="text-cyan-500">Travel</option>
        <option value="Musik" class="text-pink-700">Musik</option>
        <option value="Film" class="text-fuchsia-400">Film</option>
        <option value="Buku" class="text-indigo-700">Buku</option>
        <option value="Otomotif" class="text-amber-950 ">Otomotif</option>
        <option value="Lainnya" class="text-gray-500">Lainnya</option>
      </select>
      <button type="submit" class="rounded-r-lg bg-[91D086] text-white px-4 py-3 hover:bg-[A4EA98]">
          <i class="fas fa-search"></i>
      </button>
  </form>
</div>
</div>
<div class="mt-8 mx-52 max-sm:mx-8">
    <a href="{{ route('create.note') }}" class="bg-[91D086] text-white px-4 py-2 rounded-lg hover:bg-[A4EA98]">Tambah Catatan</a>
  </div>
  



<!-- Tampilkan catatan -->
<div class="mt-8 mx-52 mb-20 max-sm:mx-2">
  <ul>
    @foreach($notes as $note)
    <li class="py-2 border-b">
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-xl text-black font-semibold">{{ $note->title }}</h2>
            <p class="text-gray-600">{{ $note->content }}</p>
            
            @if ($note->category) {{-- Periksa apakah catatan memiliki kategori --}}
            <p class="text-gray-600">Kategori:  
                <span class="@if ($note->category === 'Pekerjaan') text-blue-500 
                            @elseif ($note->category === 'Pribadi') text-red-500 
                            @elseif ($note->category === 'Penting') text-orange-500 
                            @elseif ($note->category === 'Belajar') text-green-500 
                            @elseif ($note->category === 'Proyek') text-purple-500 
                            @elseif ($note->category === 'Liburan') text-indigo-500 
                            @elseif ($note->category === 'Rutinitas') text-pink-500 
                            @elseif ($note->category === 'Kesehatan') text-lime-500 
                            @elseif ($note->category === 'Hobi') text-yellow-500 
                            @elseif ($note->category === 'Teknologi') text-teal-500 
                            @elseif ($note->category === 'Olahraga') text-blue-700 
                            @elseif ($note->category === 'Kuliner') text-red-700 
                            @elseif ($note->category === 'Seni') text-orange-700 
                            @elseif ($note->category === 'Tugas Sekolah') text-purple-700 
                            @elseif ($note->category === 'Lainnya') text-gray-500 
                            @elseif ($note->category === 'Travel') text-cyan-500 
                            @elseif ($note->category === 'Musik') text-pink-700 
                            @elseif ($note->category === 'Film') text-fuchsia-400
                            @elseif ($note->category === 'Buku') text-indigo-700 
                            @elseif ($note->category === 'Otomotif') text-amber-950 
                        @endif">
                    {{ $note->category }}
                </span>                    
            </p>
        @endif        
            <details class="flex">
                <summary>Detail</summary>
                <p class="text-slate-400">Dibuat: <span style="color: A4EA98">{{ $note->created_at->format('d/m/Y') }} </span> <span style="color: #91D086;">{{ $note->created_at->format('H:i:s') }}</span></p>
                <p class="text-slate-400">Diperbarui: <span style="color: A4EA98">{{ $note->updated_at->format('d/m/Y') }} </span> <span style="color: #91D086;">{{ $note->updated_at->format('H:i:s') }}</span></p>
            </details>
            <div class="mt-4">
                <button class="bg-blue-500 text-white px-3 py-1 rounded-lg">
                    <a href="{{ route('edit.note', ['id' => $note->id]) }}">Edit</a>
                </button>
                <button class="bg-red-500 text-white px-3 py-1 rounded-lg">
                    <a href="{{ route('delete.note', ['id' => $note->id]) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus catatan ini?')">Hapus</a>
                </button>                
            </div>            
        </div>
    </li>
@endforeach
  </ul>
   <!-- Tautan paginasi -->
   {{ $notes->links() }}
</div>

