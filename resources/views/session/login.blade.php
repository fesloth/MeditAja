@extends('layouts.main')

<div class="flex justify-center items-center h-screen">
    <div class="w-96 bg-[91D086] border border-slate-200 rounded-xl font-rubik p-5 shadow-md">
        <form action="#" method="post">
            @csrf
            @method('post')
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="p-5">
                <h3 class="text-center text-2xl font-semibold mb-6 text-green-500">Login</h3>
                <label for="username" class="block mb-4">
                    <span class="block font-semibold text-slate-600">Username :</span>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Masukkan username"
                        class="px-4 py-2 border rounded w-full text-slate-950 bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-green-400 focus:border-green-500"
                    />
                </label>
                <label for="email" class="block mb-4">
                    <span class="block font-semibold text-slate-600">Email :</span>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan email"
                        class="px-4 py-2 border rounded w-full text-slate-950 bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-green-400 focus:border-green-500 invalid:text-red-900 invalid:focus:ring-red-800 invalid:focus:border-red-700 peer"
                    />
                </label>
                <label for="password" class="block mb-4 relative">
                    <span class="block font-semibold text-slate-600">Password :</span>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        class="px-4 py-2 border rounded w-full text-slate-950 bg-gray-100 text-sm placeholder-slate-400 focus:outline-none focus:ring focus:ring-green-400 focus:border-green-500"
                    />
                    <span id="show-password" class="absolute top-[58%] right-3 transform cursor-pointer">
                        <i id="show-icon" class="fas fa-eye text-gray-400 hover:text-gray-600"></i> <!-- Ikon mata terbuka -->
                        <i id="hide-icon" class="fas fa-eye-slash text-gray-400 hover:text-gray-600" style="display:none;"></i> <!-- Ikon mata tercoret (tersembunyi) -->
                    </span>
                </label>                               
                <button
                    type="submit"
                    class="bg-lime-600 hover:bg-green-700 text-white px-6 py-2 rounded-full text-sm font-semibold focus:outline-none focus:ring focus:ring-green-400 focus:border-green-500"
                >
                    Login
                </button>
                <p class="mt-4 text-sm text-gray-600">
                    Belum punya akun? <a href="{{ route('session.register') }}" class="text-lime-800 hover:underline">Register</a>.
                </p>
            </div>
        </form>
        @if($message = Session::get('failed'))
        <p class="text-red-400">Email atau Password salah</p>
        @endif
        <script>
            const passwordInput = document.getElementById("password");
            const showPasswordButton = document.getElementById("show-password");
            const showIcon = document.getElementById("show-icon");
            const hideIcon = document.getElementById("hide-icon");
            let passwordVisible = false;
        
            showPasswordButton.addEventListener("click", function () {
                if (passwordVisible) {
                    passwordInput.type = "password";
                    showIcon.style.display = "block";
                    hideIcon.style.display = "none";
                } else {
                    passwordInput.type = "text";
                    showIcon.style.display = "none";
                    hideIcon.style.display = "block";
                }
                passwordVisible = !passwordVisible;
            });
        </script>           
    </div>
</div>
