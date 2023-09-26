@extends('layouts.main')

<div class="flex justify-center items-center h-screen">
    <div class="w-96 bg-[#FFA500] border border-slate-200 rounded-xl font-rubik p-5 shadow-md">
        <form action="#" method="post">
            <div class="p-5">
                <h3 class="text-center text-2xl font-semibold mb-6 text-orange-800">Login</h3>
                <label for="username" class="block mb-4">
                    <span class="block font-semibold text-slate-600">Username :</span>
                    <input
                        type="text"
                        id="username"
                        placeholder="Masukkan username"
                        class="px-4 py-2 border rounded w-full text-slate-950 bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-yellow-400 focus:border-yellow-500"
                    />
                </label>
                <label for="password" class="block mb-4">
                    <span class="block font-semibold text-slate-600">Password :</span>
                    <input
                        type="password"
                        id="password"
                        placeholder="Masukkan password"
                        class="px-4 py-2 border rounded w-full bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-yellow-400 focus:border-yellow-500"
                    />
                </label>
                <label for="email" class="block">
                    <span class="block font-semibold text-slate-600">Email :</span>
                    <input
                        type="email"
                        id="email"
                        placeholder="Masukkan email"
                        class="px-4 py-2 border rounded w-full text-slate-950 bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-yellow-400 focus:border-yellow-500 invalid:text-red-900 invalid:focus:ring-red-800 invalid:focus:border-red-700 peer"
                    />
                    <p class="mt-2 text-sm text-pink-700 invisible peer-invalid:visible">Email tidak valid</p>
                </label>
                <button
                    type="submit"
                    class="bg-orange-700 hover:bg-yellow-700 text-white px-6 py-2 rounded-full text-sm font-semibold focus:outline-none focus:ring focus:ring-yellow-400 focus:border-yellow-500"
                >
                    Login
                </button>
                <p class="mt-4 text-sm text-gray-600">
                    Belum punya akun? <a href="{{ route('session.register') }}" class="text-orange-800 hover:underline">Register</a>.
                </p>
            </div>
        </form>
    </div>
</div>
