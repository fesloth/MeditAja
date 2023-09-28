@extends('layouts.main')

<div class="container">
    <div class="navbar bg-orange-700 text-white shadow-xl">
        <div class="flex-1 pl-5">
            <a class="btn btn-ghost normal-case text-xl">Music <i class="fa-solid fa-headphones"></i></a>
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

<div class="container mx-auto mt-8 text-center">
<!-- Tombol Pencarian -->
<div class="mt-20">
  <div class="justify-center flex items-center">
      <input type="text" class="w-80 px-4 py-2 border bg-white border-gray-300 focus:outline-none focus:ring focus:border-orange-500" placeholder="Cari lagu...">
      <button class="bg-orange-500 text-white px-4 py-3 hover:bg-orange-600">
          <i class="fas fa-search"></i>
      </button>
  </div>
</div>

   <!-- Kotak-Kotak Dibawah -->
<div class="mt-8 flex justify-evenly space-x-4">
<!-- Baris Pertama -->
<div class="flex flex-col justify-center mt-8">
  <div class="w-80 h-20 bg-gray-300 rounded-lg flex justify-end items-center pr-5">
      <i class="fas fa-play text-red-600 text-2xl"></i>
  </div>
  <div class="w-80 h-20 mt-4 bg-gray-300 rounded-lg flex justify-end items-center pr-5">
      <i class="fas fa-play text-red-600 text-2xl"></i>
  </div>
  <div class="w-80 h-20 mt-4 bg-gray-300 rounded-lg flex justify-end items-center pr-5">
      <i class="fas fa-play text-red-600 text-2xl"></i>
  </div>
</div>
  <!-- Baris Kedua (Sama seperti Baris Pertama) -->
  <div class="flex flex-col mt-8">
      <div class="w-80 h-20 mt-4 bg-gray-300 rounded-lg flex justify-end items-center pr-5">
          <i class="fas fa-play text-red-600 text-2xl"></i>
      </div>
      <div class="w-80 h-20 mt-4 bg-gray-300 rounded-lg flex justify-end items-center pr-5">
          <i class="fas fa-play text-red-600 text-2xl"></i>
      </div>
      <div class="w-80 h-20 mt-4 bg-gray-300 rounded-lg flex justify-end items-center pr-5">
          <i class="fas fa-play text-red-600 text-2xl"></i>
      </div>
  </div>
</div>
<!-- Pagination -->
<div class="flex justify-center mt-8 mb-36">
  <button class="bg-orange-500 text-white px-4 py-2 rounded-l-full hover:bg-orange-600">Previous</button>
  <button class="bg-orange-500 text-white px-4 py-2 hover:bg-orange-600">1</button>
  <button class="bg-orange-500 text-white px-4 py-2 hover:bg-orange-600">2</button>
  <button class="bg-orange-500 text-white px-4 py-2 rounded-r-full hover:bg-orange-600">Next</button>
</div>
</div>

@include('partials.footer')
