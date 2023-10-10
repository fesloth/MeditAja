@extends('layouts.main')

{{-- <div class="container">
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
</div> --}}

<div class="navbar bg-[91D086] text-slate-900 shadow-xl">
    <div class="flex-1 pl-5">
      <a href="#" class="btn btn-ghost normal-case text-xl">Music <i class="fa-solid fa-headphones"></i></a>
    </div>
    <div class="flex-none">
      <div class="pr-5">
        <div class="flex items-stretch">
          <a href="/" class="btn btn-ghost rounded-btn">Beranda</a>
          <div class="dropdown dropdown-end">
            <!-- Dropdown "Produktivitas" -->
            <label tabindex="0" class="btn btn-ghost">
              <div class="rounded-btn">
                <!-- Icon untuk dropdown "Produktivitas" -->
                Produktivitas <i class="fa-solid fa-chevron-down"></i>
              </div>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-green-300 rounded-box w-52">
              <!-- Tautan untuk fitur-fitur -->
              <li>
                <a href="/video" class="justify-between">
                  Video Meditasi
                </a>
              </li>
              <li><a href="/mood">Mood Tracker</a></li>
              <li>
                <a href="/todo">
                  To-Do List
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown dropdown-end mr-8">
    </div>
</div>

<div class="container mx-auto mt-8 text-center">
<!-- Tombol Pencarian -->
<div class="mt-20">
  <div class="justify-center flex items-center">
      <input type="text" class="w-80 px-4 py-2 border bg-white border-gray-300 focus:outline-none focus:ring focus:border-orange-500" placeholder="Cari lagu...">
      <button class="bg-[91D086] text-white px-4 py-3 hover:bg-green-600">
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
  <button class="bg-[7ABD6F] text-white px-4 py-2 rounded-l-full hover:bg-green-400">Previous</button>
  <button class="bg-[7ABD6F] text-white px-4 py-2 hover:bg-green-400">1</button>
  <button class="bg-[7ABD6F] text-white px-4 py-2 hover:bg-green-400">2</button>
  <button class="bg-[7ABD6F] text-white px-4 py-2 rounded-r-full hover:bg-green-400">Next</button>
</div>
</div>

@include('partials.footer')
