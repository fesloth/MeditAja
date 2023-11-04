@extends('layouts.main')
<div class="container bg-[CFFFC7]">
    {{-- <div class="navbar bg-orange-700 text-white shadow-xl">
        <div class="flex-1 pl-5">
            <a class="btn btn-ghost normal-case text-xl">Paket Premium <i class="fa-solid fa-store"></i></a>
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
      <a href="#" class="btn btn-ghost normal-case text-xl">Paket Premium<i class="fa-solid fa-store"></i></a>
    </div>
    <div class="flex-none">
      <div class="pr-5">
        <div class="flex items-stretch">
          <a href="/" class="btn btn-ghost rounded-btn">Beranda</a>
          <div class="dropdown dropdown-end">
            <!-- Dropdown "Produktivitas" -->
            <label tabindex="0" class="btn btn-ghost max-sm:hidden">
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
              <li><a href="/notes">Catatan</a></li>
              <li>
                <a href="/todo">
                  To-Do List
                </a>
              </li>
              <li>
                <a href="/kalk ">
                  Kalkulator Relaksasi
                </a>
              </li>
              <li>
                <a href="/pesan">
                  Pesan Pagi
                </a>
              </li>
              <li>
                <a href="/jurnal">
                  Jurnal
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown dropdown-end mr-8">
      <!-- Code untuk avatar dan menu dropdown lainnya -->
    </div>
  </div>
  

  <div class="cards-container flex mt-36 mx-32 my-36 max-sm:mx-0 max-sm:flex-col max-sm:justify-center max-sm:items-center">
    @foreach($paketPremiums as $paketPremium)
    <div class="card w-96 bg-[91D086] text-slate-900 mx-4 max-sm:mx-0 max-sm:mb-8 max-sm:w-80 shadow-xl">
        <div class="card-body items-center text-center m-10">
            <h2 class="card-title">{{ $paketPremium->nama_paket }}</h2>
            <p>Rp. {{ number_format($paketPremium->harga) }}.-</p>
            <div class="card-actions">
                <button class="btn bg-[6EA066] border-none text-slate-900 hover:bg-[CFFFC7]">
                  <a href="{{ route('checkout', ['harga' => $paketPremium->harga, 'paket_id' => $paketPremium->id]) }}">Beli Sekarang</a>
                </button>
            </div>
        </div>
    </div>
    @endforeach
</div>
@include('partials.footer')
