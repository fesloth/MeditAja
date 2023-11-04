@extends('layouts.main')
 @include('partials.navbar')
 <h1 class="text-4xl m-10 font-semibold text-green-600 mt-36 text-center">Progress <span class="underline">{{ $user->username }}</span></h1>
<div class="container flex justify-center items-center">
    <div class="stats shadow text-center bg-white mb-12 p-4 mx-auto max-sm:mx-10 border border-gray-300 rounded-md">
        <div class="stat">
            <div class="stat-title text-slate-800">Jumlah Tugas yang belum selesai</div>
            <div class="stat-value text-primary">
                <!-- Tampilkan jumlah tugas yang belum selesai di sini -->
                {{ $uncompletedTasks }}
            </div>
        </div>
        <div class="stat">
            <div class="mt-3 stat-value text-secondary">
                <span class="">Jumlah Tugas:</span>{{ $totalTasks }}
            </div>
        </div>
        <div class="stat">
            <div class="stat-figure text-secondary">
                <div class="avatar online">
                    <div class="w-16 rounded-full">
                        @if (Auth::user()->profile_image)
                            <img src="{{ asset('storage/' . Auth::user()->profile_image) }}">
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
                Tugas yang sudah selesai
            </div>
        </div>
    </div>
</div>

  <div class="text-center mb-16 text-slate-950">
    <h2 class="text-4xl m-10 font-semibold text-green-600 text-center">Isi Catatan <span class="underline">{{ $user->username }}</span></h2>
    <div class="flex flex-wrap justify-center mx-52 max-sm:mx-5">
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-blue-500 rounded-full p-4 inline-block">
                <i class="fas fa-briefcase text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-blue-500">{{ $jumlahCatatanPekerjaan }}</span> Catatan Pekerjaan
            </p>
        </div>
        <!-- Tambahkan data dan gaya untuk kategori lainnya di sini -->
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-red-500 rounded-full p-4 inline-block">
                <i class="fas fa-heart text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-red-500">{{ $jumlahCatatanPribadi }}</span> Catatan Pribadi
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-orange-500 rounded-full p-4 inline-block">
                <i class="fas fa-exclamation-circle text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-orange-500">{{ $jumlahCatatanPenting }}</span> Catatan Penting
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-green-500 rounded-full p-4 inline-block">
                <i class="fas fa-graduation-cap text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-green-500">{{ $jumlahCatatanBelajar }}</span> Catatan Belajar
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-purple-500 rounded-full p-4 inline-block">
                <i class="fas fa-tools text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-purple-500">{{ $jumlahCatatanProyek }}</span> Catatan Proyek
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-indigo-500 rounded-full p-4 inline-block">
                <i class="fas fa-suitcase-rolling text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-indigo-500">{{ $jumlahCatatanLiburan }}</span> Catatan Liburan
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-pink-500 rounded-full p-4 inline-block">
                <i class="fas fa-clipboard-check text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-pink-500">{{ $jumlahCatatanRutinitas }}</span> Catatan Rutinitas
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-green-500 rounded-full p-4 inline-block">
                <i class="fas fa-medkit text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-green-500">{{ $jumlahCatatanKesehatan }}</span> Catatan Kesehatan
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-yellow-500 rounded-full p-4 inline-block">
                <i class="fas fa-bicycle text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-yellow-500">{{ $jumlahCatatanHobi }}</span> Catatan Hobi
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-teal-500 rounded-full p-4 inline-block">
                <i class="fas fa-laptop-code text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-teal-500">{{ $jumlahCatatanTeknologi }}</span> Catatan Teknologi
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-blue-500 rounded-full p-4 inline-block">
                <i class="fas fa-running text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-blue-500">{{ $jumlahCatatanOlahraga }}</span> Catatan Olahraga
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-red-500 rounded-full p-4 inline-block">
                <i class="fas fa-utensils text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-red-500">{{ $jumlahCatatanKuliner }}</span> Catatan Kuliner
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-orange-500 rounded-full p-4 inline-block">
                <i class="fas fa-paint-brush text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-orange-500">{{ $jumlahCatatanSeni }}</span> Catatan Seni
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-purple-500 rounded-full p-4 inline-block">
                <i class="fas fa-graduation-cap text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-purple-500">{{ $jumlahCatatanTugasSekolah }}</span> Catatan Tugas Sekolah
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-cyan-500 rounded-full p-4 inline-block">
                <i class="fas fa-plane-departure text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-cyan-500">{{ $jumlahCatatanTravel }}</span> Catatan Travel
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-pink-700 rounded-full p-4 inline-block">
                <i class="fas fa-music text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-pink-700">{{ $jumlahCatatanMusik }}</span> Catatan Musik
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-fuchsia-400 rounded-full p-4 inline-block">
                <i class="fas fa-film text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-fuchsia-400">{{ $jumlahCatatanFilm }}</span> Catatan Film
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-indigo-700 rounded-full p-4 inline-block">
                <i class="fas fa-book text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-indigo-700">{{ $jumlahCatatanBuku }}</span> Catatan Buku
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-amber-950 rounded-full p-4 inline-block">
                <i class="fas fa-car text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-amber-950">{{ $jumlahCatatanOtomotif }}</span> Catatan Otomotif
            </p>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/5 p-4">
            <div class="bg-slate-500 rounded-full p-4 inline-block">
                <i class="fas fa-cat text-white text-2xl"></i>
            </div>
            <p class="text-xl mt-4">
                <span class="font-semibold text-slate-500">{{ $jumlahCatatanLainnya }}</span> Catatan Lainnya
            </p>
        </div>
        
        
    </div>
</div>



  <div class="text-center mb-32 text-slate-950">
    <h2 class="text-4xl m-10 font-semibold text-green-600 text-center">Analisis Mood <span class="underline">{{ $user->username }}</span></h2>
    @if (count($moodData) > 0)
        <p class="text-xl">
            @php
                $sadMoods = $moodData->where('mood', 'sedih')->count();
                $happyMoods = $moodData->where('mood', 'senang')->count();
                $goodMoods = $moodData->where('mood', 'baik')->count();
                $neutralMoods = $moodData->where('mood', 'biasa')->count();
                $badMoods = $moodData->where('mood', 'buruk')->count();
            @endphp
       <div class="flex flex-wrap justify-center">
            <div class="p-4">
                <div class="bg-red-500 rounded-full p-3">
                    <i class="fas fa-sad-tear text-white text-2xl"></i>
                </div>
                <p class="text-xl mt-4">Mood Sedih: <span class="text-red-600 font-semibold">{{ $sadMoods }}</span></p>
            </div>
            <div class="p-4">
                <div class="bg-green-500 rounded-full p-3">
                    <i class="fas fa-grin-squint-tears text-white text-2xl"></i>
                </div>
                <p class="text-xl mt-4">Mood Senang: <span class="text-green-600 font-semibold">{{ $happyMoods }}</span></p>
            </div>
            <div class="p-4">
                <div class="bg-blue-500 rounded-full p-3">
                    <i class="fas fa-smile text-white text-2xl"></i>
                </div>
                <p class="text-xl mt-4">Mood Baik: <span class="text-blue-600 font-semibold">{{ $goodMoods }}</span></p>
            </div>
            <div class="p-4">
                <div class="bg-gray-500 rounded-full p-3">
                    <i class="fas fa-meh text-white text-2xl"></i>
                </div>
                <p class="text-xl mt-4">Mood Biasa: <span class="text-gray-600 font-semibold">{{ $neutralMoods }}</span></p>
            </div>
            <div class="p-4">
                <div class="bg-yellow-500 rounded-full p-3">
                    <i class="fas fa-frown text-white text-2xl"></i>
                </div>
                <p class="text-xl mt-4">Mood Buruk: <span class="text-yellow-600 font-semibold">{{ $badMoods }}</span></p>
            </div>
        </div>

        <p class="text-xl mt-8">
            @if ($happyMoods > $sadMoods && $happyMoods > $goodMoods && $happyMoods > $neutralMoods && $happyMoods > $badMoods)
                Hai, <span class="underline">{{ $user->username }}</span>! Anda tampaknya selalu dalam suasana hati yang ceria. Teruskan semangat positif Anda!
            @elseif ($sadMoods > $happyMoods && $sadMoods > $goodMoods && $sadMoods > $neutralMoods && $sadMoods > $badMoods)
                <span class="underline">{{ $user->username }}</span>, Sepertinya Anda sering merasa sedih. Apakah semuanya baik-baik saja?
            @elseif ($goodMoods > $sadMoods && $goodMoods > $happyMoods && $goodMoods > $neutralMoods && $goodMoods > $badMoods)
                Hai, <span class="underline">{{ $user->username }}</span>! Anda tampaknya dalam suasana hati yang baik sebagian besar waktu. Pertahankan!
            @elseif ($neutralMoods > $sadMoods && $neutralMoods > $happyMoods && $neutralMoods > $goodMoods && $neutralMoods > $badMoods)
                {{ $user->username }}, Mood Anda cenderung biasa. Ini adalah bagian normal dari kehidupan.
            @elseif ($badMoods > $sadMoods && $badMoods > $happyMoods && $badMoods > $goodMoods && $badMoods > $neutralMoods)
                Tampaknya <span class="underline">{{ $user->username }}</span> mengalami beberapa mood buruk. Apakah ada yang bisa kami lakukan untuk membantu?
            @else
                Hai, <span class="underline">{{ $user->username }}</span>! Mood Anda tampaknya bervariasi. Ini adalah bagian normal dari kehidupan.
            @endif
        </p>        
    @else
        <p class="text-xl">Tidak ada data mood yang tersedia.</p>
    @endif
</div>
  @include('partials.footer')
