@extends('layouts.main')

<div class="container">
    <div class="navbar bg-orange-700 text-white shadow-xl">
      <div class="flex-1 pl-5">
        <a class="btn btn-ghost normal-case text-xl">Profile <i class="fa-solid fa-user"></i></a>
      </div>
      <div class="flex-none">
        <div class="dropdown dropdown-end pr-5">
          <div class="flex items-stretch">
            <a href="/" class="btn btn-ghost rounded-btn"><i class="fa-solid fa-angle-left fa-rotate-180"></i>Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- Konten Utama -->
   <div class="container mx-auto mt-20 flex flex-col items-center">
    <h1 class="mb-5 text-slate-950">Profile</h1>
    <!-- Gambar Pengguna -->
    <div class="w-60 h-60 bg-gray-300 rounded-full flex justify-center items-center mb-4">
        <!-- Ganti sumber gambar (src) sesuai dengan gambar pengguna -->
        <img src="{{ asset('img/cat.jpg') }}" alt="Gambar Pengguna" class="w-60 h-60 rounded-full object-cover">
    </div>
    <!-- Tombol Edit User -->
    <h3 class="mb-5 text-slate-950">Username: {{ $user->username }} </h3>
    <a href="/edit" class="bg-orange-500 text-white px-4 py-2 cursor-pointer rounded-lg hover:bg-orange-700 mb-28">Edit User</a>
</div>

@include('partials.footer')
