@extends('layouts.main')

<div class="container">
    <div class="navbar bg-orange-700 text-white shadow-xl">
      <div class="flex-1 pl-5">
        <a class="btn btn-ghost normal-case text-xl">Todo-List <i class="fa-solid fa-calendar-check"></i></a>
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

    <!-- content -->
    <div class="container mx-auto p-6">
      <section class="mt-4">
          <h1 class="text-2xl  text-slate-800 font-bold text-center">Tingkatkan Produktifitasmu!</h1>
          <hr class="my-4 border border-gray-400">
          <div class="button mt-8">
          <a href="/createTodo" class="bg-orange-700 text-white px-5 py-2 rounded-lg hover:bg-orange-800 inline-block">Add Task</a>
          <!-- Tautan untuk Timer (Di sebelah kanan) -->
          <a href="/timer" class="float-right mt-2 bg-orange-700 hover:bg-orange-800 text-white px-7 py-2 rounded-lg ">
            Timer
          </a>
        </div>
        <table class="border-collapse border border-slate-950 w-full table-auto mt-9">
          <thead class="bg-orange-500 text-white">
              <tr class="border-collapse border border-slate-950">
                  <th class="px-4 py-2 border border-slate-950">No.</th>
                  <th class="px-4 py-2 border border-slate-950">Priority</th>
                  <th class="px-4 py-2 border border-slate-950">Description</th>
                  <th class="px-4 py-2 border border-slate-950">Deadline</th>
                  <th class="px-4 py-2 border border-slate-950">Status</th>
                  <th class="px-4 py-2 border border-slate-950">Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach($task as $t)
              <tr class="text-center border-t border-gray-300">
                  <td class="px-4 py-2 border border-slate-950 text-slate-800">{{ $t->id; }}</td>
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