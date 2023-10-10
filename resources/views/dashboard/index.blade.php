@extends('layouts.main')

@include('partials.navbar')

<section class="hero-container mx-32 mt-36 mb-36">
  <div class="hero-content flex items-center">
    <div class="hero-text flex-1">
      <h1 class="text-4xl font-semibold text-[#2d334a] mb-4">Saatnya untuk menggabungkan harmoni batin dan pertumbuhan pribadi di MeditAja</h1>
      <p class="text-lg text-[#2d334a]">Kami mengajak Anda untuk menemukan kedamaian dalam diri Anda.</p>
    </div>
    <div class="hero-image">
      <img src="/path/to/your/image.jpg" alt="Meditation Image" class="w-80 h-auto" />
    </div>
  </div>
</section>

<section class="content-container mx-32 mt-10 mb-36">
  <div class="content-flex flex items-center">
    <div class="content-image">
      <img src="/path/to/your/second-image.jpg" alt="Second Image" class="w-80 h-auto" />
    </div>
    <div class="content-text flex-1 ml-8">
      <h2 class="text-2xl font-semibold text-[#2d334a] mb-4">Hilangkan rasa cemas dengan melakukan meditasi di rumah</h2>
      <p class="text-lg text-[#2d334a]">Temukan kedamaian dan kesejahteraan melalui meditasi yang mudah diakses dari rumah Anda.</p>
      <a href="/video" class="btn bg-[6EA066] border-none text-white hover:bg-lime-800 mt-4">Coba meditasi</a>
    </div>
  </div>
</section>

<section class="content-container mx-32 mt-10 mb-36">
  <div class="content-flex flex items-center">
    <div class="content-text flex-1 mr-8">
      <h2 class="text-2xl font-semibold text-[#2d334a] mb-4">Tingkatkan Produktivitasmu</h2>
      <p class="text-lg text-[#2d334a]">Apa saja kegiatan yang ingin Anda lakukan hari ini?</p>
      <a href="/todo" class="btn bg-[6EA066] border-none text-white hover:bg-lime-800 mt-4">Tulis kegiatan harianmu</a>
    </div>
    <div class="content-image">
      <img src="/path/to/your/third-image.jpg" alt="Third Image" class="w-80 h-auto" />
    </div>
  </div>
</section>


<section class="content-container mx-32 mt-10">
  <div class="content-flex flex items-center text-center">
    <div class="content-text flex-1">
      <h1 class="text-4xl font-semibold text-[#2d334a] mb-2">Apa yang terjadi hari ini?</h1>
      <p class="text-lg text-[#2d334a] mb-4">Tuangkan masalahmu</p>
    </div>
  </div>
</section>

<div class="cards-container flex mx-32 mb-36">
  <!-- Card 1 -->
  <div class="card w-96 bg-[CFFFC7] mx-4 shadow-xl">
    <div class="card-body items-center text-[#2d334a] text-center m-10">
      <h2 class="card-title">Tenangkan pikiran sejenak dengan mendengarkan lagu</h2>
      <div class="card-actions">
        <a href="/music" class="btn bg-[6EA066] border-none text-white hover:bg-lime-800">Dengarkan Lagu</a>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card w-96 bg-[CFFFC7] mx-4 shadow-xl">
    <div class="card-body items-center text-[#2d334a] text-center m-10">
      <h2 class="card-title">Lihat Grafik Progressmu</h2>
      <div class="card-actions">
        <a href="/progress" class="btn bg-[6EA066] border-none text-white hover:bg-lime-800">Lihat Progress Anda</a>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="card w-96 bg-[CFFFC7] mx-4 shadow-xl">
    <div class="card-body items-center text-[#2d334a] text-center m-10">
      <h2 class="card-title">Catat masalah Anda di Mood Tracker!</h2>
      <div class="card-actions">
        <a href="/mood" class="btn bg-[6EA066] border-none text-white hover:bg-lime-800">Tulis Keluahnmu</a>
      </div>
    </div>
  </div>
</div>


@include('partials.footer')
