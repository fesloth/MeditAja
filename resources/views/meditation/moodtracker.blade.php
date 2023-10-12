@extends('layouts.main')

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

<div class="container mx-auto mt-24 mb-24 text-center">
    <h1 class="text-2xl font-semibold text-slate-800">Apa yang terjadi hari ini?</h1>
    <form method="post" action="{{ route('mood.store') }}">
        @csrf
        <div class="w-3/4 mx-auto mt-4">
          <label for="mood">Mood</label>
          <select name="mood" id="mood" class="w-full p-4 bg-white text-slate-600 border rounded-lg">
            <option value="" disabled>Choose your mood</option>
            <option value="sedih">Sedih</option>
            <option value="senang">Senang</option>
            <option value="baik">Baik</option>
            <option value="buruk">Buruk</option>
            <option value="biasa">Biasa Saja</option>
            <option value="other">Lainnya</option>
            <!-- Add more options as needed -->
        </select>        
      </div>
        <div class="w-3/4 mx-auto mt-4">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" class="w-full p-4 bg-white text-slate-600 border rounded-lg resize-y" placeholder="Tulis keluhan Anda di sini..."></textarea>
        </div>
        <button type="submit" class="bg-[6EA066] text-white px-4 py-2 rounded-lg mt-4 hover:bg-green-700">Kirim</button>
    </form>
</div>
<script>
  // Get the select element
  const moodSelect = document.getElementById('mood');

  // Clear the selected option
  moodSelect.selectedIndex = -1;

  @if(session('success'))
  Swal.fire({
    title: 'Mood Successfully Stored',
    text: '{{$randomMessage}}', 
    icon: 'success',
  });
  @endif
</script>
@include('partials.footer')
