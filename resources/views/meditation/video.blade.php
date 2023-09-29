@extends('layouts.main')

<div class="container">
    <div class="navbar bg-orange-700 text-white shadow-xl">
      <div class="flex-1 pl-5">
        <a class="btn btn-ghost normal-case text-xl">Meditation <i class="fa-solid fa-laptop-medical"></i></a>
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
            <input type="text" class="w-80 px-4 py-2 border bg-white border-gray-300 focus:outline-none focus:ring focus:border-orange-500" placeholder="Cari video...">
            <button class="bg-orange-500 text-white px-4 py-3 hover:bg-orange-600">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <!-- 4 Kotak dengan Tombol Play -->
    <div class="flex justify-evenly mt-16">
      <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
          <!-- Konten Kotak 1 -->
          <div class="text-center">
              <i class="fas fa-play-circle text-4xl text-orange-500"></i>
          </div>
      </div>

      <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
          <!-- Konten Kotak 2 -->
          <div class="text-center">
              <i class="fas fa-play-circle text-4xl text-orange-500"></i>
          </div>
      </div>

      <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
          <!-- Konten Kotak 3 -->
          <div class="text-center">
              <i class="fas fa-play-circle text-4xl text-orange-500"></i>
          </div>
      </div>

      <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
          <!-- Konten Kotak 4 -->
          <div class="text-center">
              <i class="fas fa-play-circle text-4xl text-orange-500"></i>
          </div>
      </div>
  </div>
    <!-- 4 Kotak dengan Tombol Play -->
    <div class="flex justify-evenly mt-8">
      <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
          <!-- Konten Kotak 1 -->
          <div class="text-center">
              <i class="fas fa-play-circle text-4xl text-orange-500"></i>
          </div>
      </div>

      <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
          <!-- Konten Kotak 2 -->
          <div class="text-center">
              <i class="fas fa-play-circle text-4xl text-orange-500"></i>
          </div>
      </div>

      <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
          <!-- Konten Kotak 3 -->
          <div class="text-center">
              <i class="fas fa-play-circle text-4xl text-orange-500"></i>
          </div>
      </div>

      <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
          <!-- Konten Kotak 4 -->
          <div class="text-center">
              <i class="fas fa-play-circle text-4xl text-orange-500"></i>
          </div>
      </div>
  </div>
    <!-- Pagination -->
    <div class="flex justify-center mt-16 mb-36">
        <button class="bg-orange-500 text-white px-4 py-2 rounded-l-full hover:bg-orange-600">Previous</button>
        <button class="bg-orange-500 text-white px-4 py-2 hover:bg-orange-600">1</button>
        <button class="bg-orange-500 text-white px-4 py-2 hover:bg-orange-600">2</button>
        <button class="bg-orange-500 text-white px-4 py-2 rounded-r-full hover:bg-orange-600">Next</button>
    </div>
</div>
