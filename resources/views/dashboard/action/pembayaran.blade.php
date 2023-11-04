@extends('layouts.main')
<div class="container bg-[CFFFC7]">
<div class="navbar bg-[91D086] text-slate-900 shadow-xl">
    <div class="flex-1 pl-5 max-sm:hidden">
      <a href="#" class="btn btn-ghost normal-case text-xl">Paket Premium<i class="fa-solid fa-store"></i></a>
    </div>
    <div class="flex-none">
      <div class="pr-5">
        <div class="flex items-stretch">
          <a href="/" class="btn btn-ghost rounded-btn">Beranda</a>
          <a href="/premium" class="btn btn-ghost rounded-btn">Kembali</a>
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
      <!-- Code untuk avatar dan menu dropdown lainnya -->
    </div>
  </div>
  <form action="/transaksi" method="post">
    @csrf
    <div class="mx-auto max-sm:mx-10 mt-32 mb-32">
        <h1 class="mb-5 text-slate-950 text-center text-2xl">Pembayaran Paket Premium - Rp. {{ number_format($hargaPaket) }}</h1>
        <div class="flex flex-col items-center">
            <div class="bg-[91D086] p-6 rounded-lg shadow-md w-96">
                <h2 class="text-lg font-semibold text-slate-800 text-center mb-4">Pilih Metode Pembayaran</h2>
                <input type="hidden" name="paket_id" value="{{ $paket_id }}">
                <div class="mt-6 text-center">
                  <select name="payment_method" required class="bg-white text-slate-800 px-4 py-2 rounded-md mb-4">
                    <option value="" disabled selected>Pilih Metode Pembayaran</option>
                    <option value="Dana">Dana</option>
                    <option value="PayPal">PayPal</option>
                </select>                
                    <input type="text" name="jumlah_pembayaran" value="{{ $hargaPaket }}" readonly class="bg-white text-slate-800 px-4 py-2 rounded-md mb-4">                 
                    <button type="submit" class="bg-[6EA066] text-white px-4 py-2 rounded-lg hover:bg-[CFFFC7] hover:text-slate-900">Bayar Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</form>
@include('partials.footer')
