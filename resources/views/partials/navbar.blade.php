<div class="navbar bg-orange-700 text-white shadow-xl">
  <div class="flex-1 pl-5">
    <a class="btn btn-ghost normal-case text-xl">PAM</a>
  </div>
  <div class="flex-none">
    <div class="dropdown pr-5">
      <div class="flex items-stretch">
        <a href="/music" class="btn btn-ghost rounded-btn"><i class="fa-solid fa-music"></i></a>
        <a href="/progress" class="btn btn-ghost rounded-btn"><i class="fa-solid fa-leaf"></i></a>
      </div>
    </div>
    <div class="dropdown dropdown-end mr-8">
      @auth
      <!-- Code for authenticated users -->
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img src="{{ asset('img/cat.jpg') }}" />
        </div>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-orange-400 rounded-box w-52">
        <li>
          <a href="/profile" class="justify-between">
            Profile Setting
            <span class="badge bg-orange-500 border-none text-white">Edit?</span>
          </a>
        </li>
        <li><a href="/premium">Premium</a></li>
        <li><a href="#">Dark/Light
          <span class="badge bg-orange-500 border-none text-white">  
          <label class="swap swap-rotate ml-2">
            <!-- this hidden checkbox controls the state -->
            <input type="checkbox" />
            <!-- sun icon -->
            <svg class="swap-on fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">...</svg>
            <!-- moon icon -->
            <svg class="swap-off fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">...</svg>
          </label></span></a></li>
          <li><a href="{{ route('logout') }}">Logout</a></li>
      </ul>
      @endauth
      @guest
      <!-- Code for guests (not authenticated) -->
      <a href="{{ route('login') }}" class="btn btn-ghost">Login</a>
      @endguest
    </div>
  </div>
</div>
