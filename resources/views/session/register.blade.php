@extends('layouts.main')

<div class="flex justify-center items-center h-screen">
    <div class="max-w-lg w-96 bg-[#FFA500] border border-slate-200 rounded-xl font-rubik p-5 shadow-md">
        <form action="" method="post">
            @csrf
            <div class="p-5">
                <h3 class="text-center text-2xl font-semibold mb-6 text-orange-800">Register</h3>
                <label for="username" class="block mb-4">
                    <span class="block font-semibold text-slate-600">Username :</span>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Masukkan username"
                        class="px-4 text-slate-900 py-2 border rounded w-full bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-purple-400 focus:border-purple-500" 
                    />
                </label>
                <label for="email" class="block mb-4">
                    <span class="block font-semibold text-slate-600">Email :</span>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan email"
                        class="px-4 text-slate-900 py-2 border rounded w-full bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-purple-400 focus:border-purple-500" 
                    />
                </label>
                <label for="password" class="block mb-4">
                    <span class="block font-semibold text-slate-600">Password :</span>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        class="px-4 py-2 border rounded w-full bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-purple-400 focus:border-purple-500" required
                    />
                    @if ($errors->has('password'))
                    <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                    @endif
                </label>
                <label for="password_confirmation" class="block mb-6">
                    <span class="block font-semibold text-slate-600">Konfirmasi Password :</span>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Masukkan kembali password"
                        class="px-4 py-2 border rounded w-full bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-purple-400 focus:border-purple-500" required
                    />
                </label>
                <button
                    type="submit"
                    class="bg-orange-700 hover:bg-yellow-700 text-white px-4 py-2 rounded-full text-sm font-semibold focus:outline-none focus:ring focus:ring-purple-400 focus:border-purple-500"
                >
                    Register
                </button>
                <p class="mt-4 text-sm text-gray-600">
                    Sudah punya akun? <a href="{{ route('session.login') }}" class="text-purple-600 hover:underline">Login</a>.
                </p>
            </div>
        </form>
        @if($message = Session::get('failed'))
        <script>
            alert('Konfirmasi Password tidak sesuai')
        </script>
        @endif
    </div>
</div>
