@extends('layouts.main')

<div class="container">
  <div class="navbar bg-orange-700 text-white shadow-xl">
    <div class="flex-1 pl-5">
      <a class="btn btn-ghost normal-case text-xl">Chat dengan BOT</a>
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

<!-- chat box -->

<div class="w-96 mt-10 mx-auto max-h-full flex flex-col border shadow-md bg-white">
  <div class="flex items-center justify-between border-b p-2">
    <!-- user info -->
    <div class="flex items-center">
      <img class="rounded-full w-10 h-10"
        src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" />
      <div class="pl-2">
        <div class="font-semibold">
          <a class="hover:underline" href="#">John Doe</a>
        </div>
        <div class="text-xs text-gray-600">Online</div>
      </div>
    </div>
    <!-- end user info -->
    <!-- chat box action -->
    <div>
      <a class="inline-flex hover:bg-indigo-50 rounded-full p-2" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
        </svg>
      </a>

      <button class="inline-flex hover:bg-indigo-50 rounded-full p-2" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <!-- end chat box action -->
  </div>

  <div class="flex-1 px-4 py-4 overflow-y-auto">
    <!-- chat message -->

    <div class="flex items-center mb-4">
      <div class="flex-none flex flex-col items-center space-y-1 mr-4">
        <img class="rounded-full w-10 h-10"
          src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" />
        <a href="#" class="block text-xs hover:underline">John Doe</a>
      </div>
      <div class="flex-1 bg-indigo-400 text-white p-2 rounded-lg mb-2 relative">
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>

        <!-- arrow -->
        <div class="absolute left-0 top-1/2 transform -translate-x-1/2 rotate-45 w-2 h-2 bg-indigo-400"></div>
        <!-- end arrow -->
      </div>
    </div>

    <!-- end chat message -->

    <!-- chat message -->

    <div class="flex items-center flex-row-reverse mb-4">
      <div class="flex-none flex flex-col items-center space-y-1 ml-4">
        <img class="rounded-full w-10 h-10"
          src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" />
        <a href="#" class="block text-xs hover:underline">Jesse</a>
      </div>
      <div class="flex-1 bg-indigo-100 text-gray-800 p-2 rounded-lg mb-2 relative">
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
          adipisicing elit.</div>

        <!-- arrow -->
        <div class="absolute right-0 top-1/2 transform translate-x-1/2 rotate-45 w-2 h-2 bg-indigo-100"></div>
        <!-- end arrow -->
      </div>
    </div>

    <!-- end chat message -->

    <!-- chat message -->

    <div class="flex items-center mb-4">
      <div class="flex-none flex flex-col items-center space-y-1 mr-4">
        <img class="rounded-full w-10 h-10"
          src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" />
        <a href="#" class="block text-xs hover:underline">John Doe</a>
      </div>
      <div class="flex-1 bg-indigo-400 text-white p-2 rounded-lg mb-2 relative">
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>

        <!-- arrow -->
        <div class="absolute left-0 top-1/2 transform -translate-x-1/2 rotate-45 w-2 h-2 bg-indigo-400"></div>
        <!-- end arrow -->
      </div>
    </div>

    <!-- end chat message -->
  </div>

  <div class="flex items-center border-t p-2">
    <!-- chat input action -->
    <div>
      <button class="inline-flex bg-white hover:bg-indigo-50 rounded-full p-2" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
      </button>
    </div>
    <!-- end chat input action -->

    <div class="w-full mx-2">
      <input class="w-full bg-white p-2 rounded-full border border-gray-200" type="text" value="" placeholder="Aa" autofocus />
    </div>

    <!-- chat send action -->

    <div>
      <button class="inline-flex hover:bg-indigo-50 rounded-full p-2" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
      </button>
    </div>

    <!-- end chat send action -->
  </div>
</div>

<!-- end chat box -->