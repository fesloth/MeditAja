@extends('layouts.main')

<div class="navbar bg-orange-700 text-white">
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-xl">PAM</a>
    </div>
    <div class="flex-none">
      <ul class="mr-8 flex space-x-4">
        <li>
          <a href="{{ route('adminTransaksi') }}" class="hover:bg-orange-300 p-3 rounded-md">Data Transaksi</a>
        </li>
        <li>
          <a href="{{ route('logout') }}" class="hover:bg-orange-300 p-3 rounded-md">Logout</a>
        </li>
      </ul>  
    </div>
  </div>
  <div class="flex flex-col justify-center items-center my-20">
    <h1 class="text-3xl mb-4">Selamat Datang <span class="text-indigo-600">Admin!</span></h1>
    <div class="relative overflow-x-auto overflow-y-auto shadow-md sm:rounded-lg mt-4">
      <table class="w-full shadow-lg divide-gray-200">  
          <thead class="bg-orange-600">
              <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                      No
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                      Daftar User
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                      Aksi
                  </th>
              </tr>
          </thead>
          <tbody class="bg-orange-300 divide-y divide-gray-200">
              @foreach($users as $user)
              <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-slate-900">
                      {{ $loop->iteration }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-slate-900">
                      {{ $user->username }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                      <form action="{{ route('admin.deleteUser', $user->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                      </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  <nav aria-label="Page navigation example" class="mt-10">
      {{ $users->links() }} <!-- Menampilkan tautan halaman paginasi -->
  </nav>
  

  </div>
  
  
  