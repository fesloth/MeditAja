@extends('layouts.main')
<div class="container">
    <div class="navbar bg-orange-700 text-white shadow-xl">
        <div class="flex-1 pl-5">
            <a class="btn btn-ghost normal-case text-xl">Paket Premium <i class="fa-solid fa-store"></i></a>
        </div>
        <div class="flex-none">
            <div class="dropdown dropdown-end pr-5">
                <div class="flex items-stretch">
                    <a href="/premium" class="btn btn-ghost rounded-btn"><i class="fa-solid fa-angle-left fa-rotate-180"></i>Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto mt-10">
    <h1 class="mb-5 text-slate-950 text-center text-2xl">Pembayaran Paket Premium - Rp. {{ number_format($hargaPaket) }}</h1>
    <div class="flex flex-col items-center">
        <div class="bg-white p-6 rounded-lg shadow-md w-96">
            <h2 class="text-lg font-semibold">Pilih Metode Pembayaran</h2>
            <div class="mt-4">
                <!-- Metode Pembayaran GoPay -->
                <div class="flex items-center space-x-4 mb-4">
                    <input type="radio" id="gopay" name="payment_method" value="gopay">
                    <label for="gopay" class="cursor-pointer">
                        <img src="{{ asset('img/gopay.jpeg') }}" alt="GoPay" class="w-16 h-16">
                    </label>
                </div>
                <!-- Metode Pembayaran Dana -->
                <div class="flex items-center space-x-4">
                    <input type="radio" id="dana" name="payment_method" value="dana">
                    <label for="dana" class="cursor-pointer">
                        <img src="{{ asset('img/dana.jpeg') }}" alt="Dana" class="w-16 h-16">
                    </label>
                </div>
            </div>
            <!-- Tombol Bayar -->
            <div class="mt-6 text-center">
                <button class="bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-800">Bayar Sekarang</button>
            </div>
        </div>
    </div>
</div>

