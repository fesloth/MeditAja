@extends('layouts.main')

{{-- <div class="container mx-auto">
    <div class="navbar bg-orange-700 text-white shadow-xl">
        <div class="flex-1 pl-5">
            <a class="btn btn-ghost normal-case text-xl">Mood Tracker <i class="fa-solid fa-face-smile"></i></a>
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
      <a href="#" class="btn btn-ghost normal-case text-xl">Mood Tracker <i class="fa-solid fa-face-smile"></i></a>
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

<div class="container mx-auto mt-44 text-center">
    <h1 class="text-2xl font-semibold text-slate-800">Apa Keluhan Anda Hari Ini?</h1>
    <div class="w-3/4 mx-auto mt-4">
      <textarea class="w-full h-48 p-4 bg-white text-slate-600 border rounded-lg resize-y" placeholder="Tulis keluhan Anda di sini..."></textarea>
  </div>
    <button class="bg-[6EA066] text-white px-4 py-2 rounded-lg mt-4 hover:bg-orange-700 mb-40">Kirim</button>
</div>

@include('partials.footer')
