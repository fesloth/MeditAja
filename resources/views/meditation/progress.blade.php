@extends('layouts.main')
  <div class="container">
    <div class="navbar bg-orange-700 text-white shadow-xl">
      <div class="flex-1 pl-5">
        <a class="btn btn-ghost normal-case text-xl">User Point <i class="fa-solid fa-star"></i></a>
      </div>
      <div class="flex-none">
        <div class="dropdown dropdown-end pr-5">
          <div class="flex items-stretch">
            <a href="/" class="btn btn-ghost rounded-btn"><i class="fa-solid fa-angle-left fa-rotate-180"></i>Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h1 class="text-4xl m-10 font-semibold text-yellow-600 mt-36 text-center">Progress Anda</h1>
  <div class="container flex justify-center items-center">
    <div class="stats shadow text-center bg-white mb-36">
      <div class="stat">
        <div class="stat-figure text-primary">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
        </div>
        <div class="stat-title text-slate-800">Jumlah Task yang belum selesai</div>
        <div class="stat-value text-primary">
            <!-- Tampilkan jumlah tugas yang belum selesai di sini -->
            {{ $uncompletedTasks }}
        </div>
      </div>
      <div class="stat">
        <div class="stat-figure text-secondary">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
        </div>
        <div class="mt-3 stat-value text-secondary">
          <span class="">Jumlah task:</span>{{ $totalTasks }}
        </div>
      </div>

      <div class="stat">
        <div class="stat-figure text-secondary">
          <div class="avatar online">
            <div class="w-16 rounded-full">
              @if ($user->profile_image)
              <img src="{{ asset('storage/' . $user->profile_image) }}">
              @else
              <img src="{{ asset('img/user.jpeg') }}" />
          @endif
            </div>
          </div>
        </div>
        <div class="stat-value">
          {{ $completedTasks }}
        </div>
        <div class="stat-title text-slate-800">
          Task yang sudah selesai
        </div>
      </div>
    </div>
  </div>

  @include('partials.footer')
