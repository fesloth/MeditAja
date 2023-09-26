@extends('layouts.main')
  <div class="container">
    <div class="navbar bg-orange-700 text-white shadow-xl">
      <div class="flex-1 pl-5">
        <a class="btn btn-ghost normal-case text-xl">Paket Premium <i class="fa-solid fa-store"></i></a>
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
  <div class="cards-container flex mt-36 mx-32 my-36">
    <div class="card w-96 bg-[#ff8906] text-white mx-4 shadow-xl">  
      <div class="card-body items-center text-center m-10">
        <h2 class="card-title">Beli Paket Tahunan!</h2>
        <p>Rp. 300.000,00-</p>
        <div class="card-actions">
          <button class="btn bg-orange-600 border-none text-white hover:bg-orange-800">Buy Now</button>
        </div>
      </div>
    </div>
    <div class="card w-96 bg-[#ff8906] text-white mx-4 shadow-xl">
      <div class="card-body items-center text-center m-10">
        <h2 class="card-title">Beli Paket Bulanan!</h2>
        <p>Rp. 50.000,00-</p>
        <div class="card-actions">
          <button class="btn bg-orange-600 border-none text-white hover:bg-orange-800">Buy Now</button>
        </div>
      </div>
    </div>
    <div class="card w-96 bg-[#ff8906] text-white mx-4 shadow-xl">
      <div class="card-body items-center text-center m-10">
        <h2 class="card-title">Beli Paket Mingguan!</h2>
        <p>Rp. 20.000,00-</p>
        <div class="card-actions">
          <button class="btn bg-orange-600 border-none text-white hover:bg-orange-800">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
@include('partials.footer')
