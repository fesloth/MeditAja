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
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown dropdown-end mr-8">
    </div>
</div>

<div class="container mx-auto mt-24 mb-24 text-center">
    <h1 class="text-2xl font-semibold text-slate-800">Apa yang terjadi hari ini?</h1>
    <div class="fixed inset-0 flex items-center justify-center z-50" id="alertBackdrop" style="display: none;">
      <div class="fixed inset-0 flex items-center justify-center">
        <div class="bg-gray-800 bg-opacity-50 w-full h-full absolute" id="alertBackdrop"></div>
          <div class="bg-[91D086] text-black p-4 rounded-lg shadow-md z-10" id="alert" style="display: none;">
            <p class="text-2xl px-16 font-semibold mb-4 mt-16">Hai {{ $user->username }}! <i class="fa-regular fa-hand"></i> <br> Ada pesan nih dari MeditAja</p>
              <p class="italic px-16" id="alertMessage"></p>
              <button id="closeAlert" class="bg-gray-300 hover:bg-gray-400 text-black px-5 py-3 rounded-lg mt-4 mb-14">Tutup</button>
          </div>
      </div>
  </div>  
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
        </select>        
      </div>
        <div class="w-3/4 mx-auto mt-4">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" class="w-full p-4 bg-white text-slate-600 border rounded-lg resize-y" placeholder="Tulis keluhan Anda di sini..."></textarea>
        </div>
        <button type="submit" class="bg-[6EA066] text-white px-4 py-2 rounded-lg mt-4 hover:bg-[91D086]">Kirim</button>
    </form>
</div>
<script>
  // Get the select element
  const moodSelect = document.getElementById('mood');

  // Clear the selected option
  moodSelect.selectedIndex = -1;

  @if(session('success'))
    const randomMessage = "{{$randomMessage}}"; // Mengambil pesan acak dari controller
    const alertBackdrop = document.getElementById('alertBackdrop');
    const alertElement = document.getElementById('alert');
    const alertMessageElement = document.getElementById('alertMessage');
    const closeAlertButton = document.getElementById('closeAlert');

    // Tampilkan pesan alert dan isi dengan pesan acak
    alertBackdrop.style.display = 'block';
    alertElement.style.display = 'block';
    alertMessageElement.innerText = randomMessage;

    // Menambahkan event listener pada tombol "Mengerti"
    closeAlertButton.addEventListener('click', function() {
        alertBackdrop.style.display = 'none';
    });
@endif
</script>
@include('partials.footer')
