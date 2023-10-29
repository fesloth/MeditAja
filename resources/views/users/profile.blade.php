@extends('layouts.main')

{{-- <div class="container">
    <div class="navbar bg-orange-700 text-white shadow-xl">
      <div class="flex-1 pl-5">
        <a class="btn btn-ghost normal-case text-xl">Profile <i class="fa-solid fa-user"></i></a>
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
    <a href="#" class="btn btn-ghost normal-case text-xl">Profile <i class="fa-solid fa-user"></i></a>
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
    @auth
    <!-- Code for authenticated users -->
    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
      <div class="w-10 rounded-full">
        @if ($user->profile_image)
            <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Avatar Image" />
        @else
            <img src="{{ asset('img/user.jpeg') }}" alt="Default Avatar" />
        @endif
      </div>      
    </label>
    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-green-300 rounded-box w-52">
      <li>
        <a href="/profile" class="justify-between">
          Pengaturan Profile
        </a>
      </li>
      <li><a href="/premium">Berlangganan (premium)</a></li>
      <li><a href="{{ route('logout') }}">Keluar <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
    </ul>
    @endauth
    @guest
    <!-- Code for guests (not authenticated) -->
    <a href="{{ route('login') }}" class="btn btn-ghost">Login</a>
    @endguest
  </div>
</div>

   <!-- Konten Utama -->
   <div class="container mx-auto mt-20 flex flex-col items-center">
    <h1 class="mb-5 text-slate-950">Profile</h1>
    <!-- Gambar Pengguna -->
    <div class="w-60 h-60 bg-gray-300 rounded-full flex justify-center items-center mb-4">
      @if ($user->profile_image)
        <!-- Ganti sumber gambar (src) sesuai dengan gambar pengguna -->
        <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Gambar Pengguna" class="w-60 h-60 rounded-full object-cover">
        @else
              <img src="{{ asset('img/user.jpeg') }}" class="w-60 h-60 rounded-full object-cover" />
          @endif
    </div>
    <!-- Tombol Edit User -->
    <h3 class="mb-5 text-slate-950">
      Username: {{ $user->username }}
    </h3>
    <h4 class="mb-5">
      @if ($user->role === 'admin')
      <span class="text-blue-700">Admin <i class="fa-solid fa-user-lock"></i></span>
      @endif
      @if ($user->role === 'user')
      <span class="text-green-500">User <i class="fa-solid fa-user"></i></span>
      @endif
      @if ($user->is_premium)
      <span class="text-green-700">| User Premium <i class="fa-solid fa-unlock"></i>
      @endif
    </h4>    
    @if ($user->report_reason)
    <p class="text-red-600 mb-6">
        <span class="text-yellow-500"><i class="fas fa-exclamation-triangle"></i> Admin melaporkan Anda</span><br>
        Alasan Pelaporan: {{ $user->report_reason }}
    </p>
    @endif
    <a href="/edit" class="bg-[6EA066] text-white px-4 py-2 cursor-pointer rounded-lg hover:bg-[91D086] mb-24">Edit Profile</a>
</div>

@include('partials.footer')
