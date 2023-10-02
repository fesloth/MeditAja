<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    // views 
    public function index()
    {

        $task = Todo::get();
        // Menghitung statistik
        $totalTasks = count($task);
        $completedTasks = $task->where('status', 'Done')->count();
        $uncompletedTasks = $totalTasks - $completedTasks;
        $completionPercentage = $totalTasks > 0 ? ($completedTasks / $totalTasks) * 100 : 0;

        return view('meditation.progress', [
            'title' => 'Progress',
            'task' => $task,
            'totalTasks' => $totalTasks,
            'completedTasks' => $completedTasks,
            'uncompletedTasks' => $uncompletedTasks,
            'completionPercentage' => $completionPercentage,
        ]);
    }

    public function todo()
    {
        $task = Todo::get();

        return view('meditation.todolist', [
            'title' => 'TodoList', 'task' => $task
        ]);
    }

    public function createTodo()
    {
        return view('meditation.action.create', ['title' => 'Create Task']);
    }

    public function storeTodo(Request $request)
    {
        // Validasi data yang dikirimkan dari formulir jika diperlukan

        $task = new Todo();
        $task->description = $request->description;
        $task->deadline = $request->deadline;
        $task->priority = $request->priority;
        $task->status = $request->status ?? 'On progress';

        $task->save();

        // Redirect atau tampilkan pesan sukses
        return redirect('/todo')->with('success', 'Task produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $task = Todo::find($id);

        return view('meditation.action.edit', [
            'title' => 'Edit Task', 'task' => $task
        ]);
    }

    public function update(Request $request, $id)
    {

        // Temukan task yang akan diperbarui berdasarkan ID
        $task = Todo::find($id);

        // Perbarui data task
        $task->description = $request->description;
        $task->deadline = $request->deadline;
        $task->priority = $request->priority;

        $task->status = $request->status ?? 'On progress';

        $task->save();

        return redirect('/todo')->with('success', 'Data task berhasil diperbarui.');
    }

    public function status($id)
    {
        // Temukan tugas berdasarkan ID
        $task = Todo::find($id);

        if (!$task) {
            return redirect('/todo')->with('error', 'Tugas tidak ditemukan.');
        }

        // Toggle status dari "On progress" ke "Done" atau sebaliknya
        $task->status = $task->status == 'On progress' ? 'Done' : 'On progress';
        $task->save();

        return redirect('/todo')->with('success', 'Status tugas berhasil diubah.');
    }

    public function delete($id)
    {
        $task = Todo::find($id);

        if (!$task) {
            return redirect('/todo')->with('error', 'Data produk tidak ditemukan.');
        }
        // Hapus data produk
        $task->delete();

        return redirect('/todo')->with('success', 'Data produk berhasil dihapus.');
    }

    public function music()
    {
        return view('meditation.music', [
            "title" => "Playlist"
        ]);
    }

    public function timer()
    {
        return view('meditation.timer', [
            "title" => "Timer"
        ]);
    }

    public function video()
    {
        return view('meditation.video', [
            "title" => "Video"
        ]);
    }

    public function mood()
    {
        return view('meditation.moodtracker', [
            "title" => "Mood Tracker"
        ]);
    }
}
