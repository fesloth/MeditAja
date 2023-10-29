@extends('layouts.main')
  <div class="navbar bg-[91D086] text-slate-900 shadow-xl">
    <div class="flex-1 pl-5">
      <a href="#" class="btn btn-ghost normal-case text-xl">Todo-List <i class="fa-solid fa-calendar-check"></i></a>
    </div>
    <div class="flex-none">
      <div class="pr-5">
        <div class="flex items-stretch">
          <a href="/" class="btn btn-ghost rounded-btn">Beranda</a>
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
    </div>
</div>

    <!-- content -->
    <div class="container mx-auto p-6">
      <section class="mt-4">
          <h1 class="text-2xl  text-slate-800 font-bold text-center">Tingkatkan Produktifitasmu!</h1>
          <hr class="my-4 border border-gray-400">
          <div class="button mt-8">
          <a href="/createTodo" class="bg-[93CE89] text-white px-5 py-2 rounded-lg hover:bg-[91D086] inline-block">Add Task</a>
          <!-- Tautan untuk Timer (Di sebelah kanan) -->
          <a href="/timer" class="float-right mt-2 bg-[93CE89] hover:bg-[91D086] text-white px-7 py-2 rounded-lg ">
            Timer
          </a>
        </div>
        <table class="border-collapse border border-slate-950 w-full table-auto mt-9">
          <thead class="bg-[76AA6E] text-white">
              <tr class="border-collapse border border-slate-950">
                  <th class="px-4 py-2 border border-slate-950">Priority</th>
                  <th class="px-4 py-2 border border-slate-950">Description</th>
                  <th class="px-4 py-2 border border-slate-950">Deadline</th>
                  <th class="px-4 py-2 border border-slate-950">Status</th>
                  <th class="px-4 py-2 border border-slate-950">Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach($task as $t)
            @if($t->user_id === Auth::id()) {{-- Tampilkan hanya tugas yang dimiliki oleh pengguna yang saat ini masuk --}}
                <tr class="text-center border-t border-gray-300">
                    <td class="px-4 py-2 border border-slate-950 text-slate-800">{{ $t->priority; }}</td>
                    <td class="px-4 py-2 border border-slate-950 text-slate-800">{{ $t->description; }}</td>
                    <td class="px-4 py-2 border border-slate-950 text-slate-800">{{ $t->deadline; }}</td>
                    <td class="px-4 py-2 border border-slate-950 text-slate-800">{{ $t->status; }}</td>
                    <td class="px-4 py-2 border border-slate-950 text-center">
                        @if($t->status == 'Done')
                        <form action="status/{{ $t->id }}" method="post" class="inline-block">
                            @csrf
                            <button type="submit" class="icon-button" title="Toggle Status">
                                <i class="fa-solid fa-check text-green-600"></i>
                            </button>
                        </form>
                        @else
                        <form action="status/{{ $t->id }}" method="post" class="inline-block">
                            @csrf
                            <button type="submit" class="icon-button" title="Toggle Status">
                                <i class="fa-solid fa-hourglass-end text-indigo-600"></i>
                            </button>
                        </form>
                        @endif                    
                        |
                        <a href="editTodo/{{ $t->id }}" class="text-blue-500"><i class="fas fa-pencil-alt"></i></a> |
                        <a href="delete/{{ $t->id }}" onclick="return confirmDelete()" class="text-red-500"><i class="fas fa-trash-alt"></i></a>
                    </td>                       
                </tr>
            @endif
            @endforeach
        </tbody>        
      </table>      
      </section>
  </div>

  <script>
    function confirmDelete() {
    return confirm("Apakah Anda yakin ingin menghapus tugas ini?");
}
</script>