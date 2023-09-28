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
          <table class="w-full table-auto mt-9">
              <thead class="bg-yellow-600 text-white">
                  <tr>
                      <th class="px-4 py-2">No.</th>
                      <th class="px-4 py-2">Priority</th>
                      <th class="px-4 py-2">Description</th>
                      <th class="px-4 py-2">Deadline</th>
                      <th class="px-4 py-2">Status</th>
                      <th class="px-4 py-2">Action</th>
                  </tr>
              </thead>
              <tbody>
                      <tr>
                          {{-- <td class="px-4 py-2"><?= $i; ?></td>
                          <td class="px-4 py-2"><?= $row["priority"]; ?></td>
                          <td class="px-4 py-2"><?= $row["description"]; ?></td>
                          <td class="px-4 py-2"><?= $row["deadline"]; ?></td>
                          <td class="px-4 py-2"><?= $row["status"]; ?></td>
                          <td class="px-4 py-2">
                              <form action="index.php" method="post" class="inline-block">
                                  <input type="hidden" name="status" value="1">
                                  <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                  <button type="submit" class="icon-button" title="Start">
                                      <i class="fas fa-hourglass-start"></i>
                                  </button>
                              </form> |
                              <form action="index.php" method="post" class="inline-block">
                                  <input type="hidden" name="status" value="2">
                                  <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                  <button type="submit" class="icon-button" title="Done">
                                      <i class="text-green-500 fas fa-check"></i>
                                  </button>
                              </form>
                              |
                              <a href="edit.php?id=<?= $row["id"]; ?>" class="text-blue-500"><i class="fas fa-pencil-alt"></i></a> |
                              <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');" class="text-red-500"><i class="fas fa-trash-alt"></i></a>
                          </td> --}}
                      </tr>
              </tbody>
          </table>
      </section>
  </div>