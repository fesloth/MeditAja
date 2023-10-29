<div class="navbar bg-[91D086] text-slate-900 shadow-xl fixed top-0 left-0 w-full z-[10]">
  <div class="flex-1 pl-8">
    <!-- Tambahkan atribut data-dropdown-ignore di bawah ini -->
    <img src="{{ asset('img/flower.png') }}" width="40">
    <a href="/" class="normal-case text-xl ml-1" data-dropdown-ignore>MeditAja</a>

  </div>
  <div class="flex-none">
    <div class="pr-5">
      <div class="flex items-stretch">
        <!-- Tombol "Beranda" dengan atribut data-dropdown-ignore -->
        <a href="/" class="btn btn-ghost rounded-btn" data-dropdown-ignore>Beranda</a>
        <div class="dropdown dropdown-end">
          <!-- Dropdown "Produktivitas" -->
          <label tabindex="0" class="btn btn-ghost">
            <div class="rounded-btn">
              <!-- Icon untuk dropdown "Produktivitas" -->
              Produktivitas <i class="fa-solid fa-chevron-down"></i>
            </div>      
          </label>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-green-300 rounded-box w-52">
            <!-- Tautan untuk fitur-fitur -->
            <li>
              <a href="/video" class="justify-between">
                Video Meditasi
              </a>
            </li>
            <li><a href="/mood">Mood Tracker</a></li>
            <li><a href="/notes">Catatan</a></li>
            <li>
              <a href="/todo">
                To-Do List
              </a>
            </li>
            <li>
              <a href="/kalk ">
                Kalkulator Relaksasi
              </a>
            </li>
            <li>
              <a href="/pesan">
                Pesan Pagi
              </a>
            </li>
            <li>
              <a href="/jurnal">
                Jurnal
              </a>
            </li>
          </ul>
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
            <img src="{{ asset('storage/' . $user->profile_image) }}"/>
        @else
            <img src="{{ asset('img/user.jpeg') }}" alt="Default Avatar" />
        @endif
      </div>      
    </label>
    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-green-300 rounded-box w-52">
      <li>
        <a href="/profile" class="justify-between">
          Pengaturan Profil
        </a>
      </li>
      <li><a href="/premium">Berlangganan (premium)</a></li>
      <li><a href="{{ route('logout') }}">Keluar <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
    </ul>
    @endauth
    @guest
    <!-- Code for guests (not authenticated) -->
    <a href="{{ route('login') }}" class="btn btn-ghost">Login</a>
    <a href="{{ route('session.register') }}" class="btn btn-ghost">Daftar</a>
    @endguest
  </div>
</div>
