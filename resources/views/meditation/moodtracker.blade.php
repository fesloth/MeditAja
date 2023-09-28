@extends('layouts.main')

<div class="container mx-auto">
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
</div>

<div class="container mx-auto mt-44 text-center">
    <h1 class="text-2xl font-semibold text-slate-800">Apa Keluhan Anda Hari Ini?</h1>
    <div class="w-3/4 mx-auto mt-4">
      <textarea class="w-full h-48 p-4 bg-white text-slate-600 border rounded-lg resize-y" placeholder="Tulis keluhan Anda di sini..."></textarea>
  </div>
    <button class="bg-orange-600 text-white px-4 py-2 rounded-lg mt-4 hover:bg-orange-700 mb-40">Kirim</button>
</div>

@include('partials.footer')
