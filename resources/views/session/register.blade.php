@extends('layouts.main')

<div class="flex justify-center items-center h-screen">
    <div class="max-w-lg w-96 bg-white border border-slate-200 rounded-xl font-rubik p-5 shadow-md dark:bg-slate-300">
        <form action="#" method="post">
            <div class="p-5">
                <h3 class="text-center text-2xl font-semibold mb-6 text-purple-600">Register</h3>
                <label for="username" class="block mb-4">
                    <span class="block font-semibold text-slate-800">Username</span>
                    <input
                        type="text"
                        id="username"
                        placeholder="Masukkan username"
                        class="px-4 text-slate-900 py-2 border rounded w-full bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-purple-400 focus:border-purple-500"
                    />
                </label>
                <label for="email" class="block mb-4">
                    <span class="block font-semibold text-slate-800">Email</span>
                    <input
                        type="email"
                        id="email"
                        placeholder="Masukkan email"
                        class="px-4 text-slate-900 py-2 border rounded w-full bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-purple-400 focus:border-purple-500"
                    />
                </label>
                <label for="password" class="block mb-4">
                    <span class="block font-semibold text-slate-800">Password</span>
                    <input
                        type="password"
                        id="password"
                        placeholder="Masukkan password"
                        class="px-4 py-2 border rounded w-full bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-purple-400 focus:border-purple-500"
                    />
                </label>
                <label for="password_confirmation" class="block mb-6">
                    <span class="block font-semibold text-slate-800">Konfirmasi Password</span>
                    <input
                        type="password"
                        id="password_confirmation"
                        placeholder="Masukkan kembali password"
                        class="px-4 py-2 border rounded w-full bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-purple-400 focus:border-purple-500"
                    />
                </label>
                <button
                    type="submit"
                    class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-full text-sm font-semibold focus:outline-none focus:ring focus:ring-purple-400 focus:border-purple-500"
                >
                    Register
                </button>
                <p class="mt-4 text-sm text-gray-600">
                    Sudah punya akun? <a href="{{ route('session.login') }}" class="text-purple-600 hover:underline">Login di sini</a>.
                </p>
            </div>
        </form>
    </div>
</div>
