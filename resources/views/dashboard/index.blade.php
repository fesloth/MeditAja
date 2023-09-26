@extends('layouts.main')

@include('partials.navbar')
 <div class="cards-container flex mt-36 mb-36 mx-32">
    <div class="card w-96 bg-[#ff8906] mx-4 shadow-xl">
      <div class="card-body items-center text-[#2d334a] text-center m-10">
        <h2 class="card-title">Hilangkan rasa cemas dengan melakukan meditasi di rumah</h2>
        <div class="card-actions">
          <button class="btn bg-orange-600 border-none text-white hover:bg-orange-800">Coba meditasi</button>
        </div>
      </div>
    </div>
    <div class="card w-96 bg-[#ff8906] mx-4 shadow-xl">
      <div class="card-body items-center text-[#2d334a] text-center m-10">
        <h2 class="card-title">Tingkatkan produktivitasmu</h2>
        <div class="card-actions">
          <button class="btn bg-orange-600 border-none text-white hover:bg-orange-800">Tulis kegiatan harianmu</button>
        </div>
      </div>
    </div>
    <div class="card w-96 bg-[#ff8906] mx-4 shadow-xl">
      <div class="card-body items-center text-[#2d334a] text-center m-10">
        <h2 class="card-title">Catat masalahmu di Mood Tracker!</h2>
        <div class="card-actions">
          <button class="btn bg-orange-600 border-none text-white hover:bg-orange-800">Ayo konsultasi!</button>
        </div>
      </div>
    </div>
  </div>
 @include('partials.footer')
