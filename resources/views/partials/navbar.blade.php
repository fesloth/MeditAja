@extends('layouts.main')
<div class="navbar bg-base-100 shadow-xl">
  <div class="flex-1 pl-5">
    <a class="btn btn-ghost normal-case text-xl">PAM</a>
  </div>
  <div class="flex-none">
    <div class="dropdown dropdown-end pr-5">
      <div class="flex items-stretch">
          <a class="btn btn-ghost rounded-btn"><i class="fa-brands fa-rocketchat"></i></a>
          <div class="dropdown dropdown-end">
      <div class="flex items-stretch">
          <a class="btn btn-ghost rounded-btn"><i class="fa-solid fa-leaf"></i></a>
          <div class="dropdown dropdown-end">
    </div>
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img src="{{ asset('img/cat.jpg') }}" />
        </div>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li>
          <a class="justify-between">
            Profile Setting
            <span class="badge">Edit?</span>
          </a>
        </li>
        <li><a>Premium</a></li>
        <li><a href="{{ route ('session.login') }}">Logout</a></li>
      </ul>
    </div>
  </div>
</div>
