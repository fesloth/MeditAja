<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    // views 
    public function index()
    {
        $user = Auth::user();

        $moodData = Mood::where('user_id', $user->id)->get();

        // Menghitung statistik hanya untuk tugas milik pengguna yang saat ini masuk
        $task = Todo::where('user_id', $user->id)->get();

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
            'moodData' => $moodData,
            "user" => $user
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

        $user = Auth::user(); // Mengambil pengguna yang sedang masuk

        $task = new Todo();
        $task->description = $request->description;
        $task->deadline = $request->deadline;
        $task->priority = $request->priority;
        $task->status = $request->status ?? 'On progress';

        // Mengaitkan tugas dengan pengguna yang sedang masuk
        $task->user_id = $user->id;

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
            return redirect('/todo')->with('error', 'tugas tidak ditemukan.');
        }
        // Hapus tugas
        $task->delete();

        return redirect('/todo')->with('success', 'tugas berhasil dihapus.');
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
        // Array of random inspirational messages
        $inspirationalMessages = [
            "Kamu telah melakukan hal yang baik hari ini, selamat!",
            "Tetap Semangat!",
            "Setiap hari adalah peluang baru.",
            "Semangat! Ayo tersenyum untuk hari ini!",
            "Bersyukur selalu membuat hari menjadi lebih baik.",
            "Ketika hidup memberimu alasan untuk menyerah, berikan alasan untuk tetap melangkah.",
            "Keberhasilan dimulai dengan langkah pertama. Lakukan sekarang!",
            "Hari ini adalah hari yang bagus untuk menciptakan masa depan yang cerah.",
            "Setiap masalah memiliki solusi. Terus berpikir positif!",
            "Saat kita bersyukur, hidup menjadi lebih indah.",
        ];

        // Get a random message from the array
        $randomMessage = $inspirationalMessages[array_rand($inspirationalMessages)];

        return view('meditation.moodtracker', [
            "title" => "Mood Tracker",
            "success" => 'Mood successfully stored.',
            "randomMessage" => $randomMessage
        ]);
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'mood' => 'required|max:255',
            'description' => 'nullable',
        ]);

        // Create a new Mood instance and save it to the database
        $newMood = Mood::create([
            'user_id' => auth()->id(), // Assuming you're associating moods with the currently authenticated user.
            'mood' => $validatedData['mood'],
            'description' => $validatedData['description'],
        ]);

        // Array of random inspirational messages
        $inspirationalMessages = [
            "Kamu telah melakukan hal yang baik hari ini, selamat!",
            "Tetap Semangat!",
            "Setiap hari adalah peluang baru.",
            "Semangat! Ayo tersenyum untuk hari ini!",
            "Bersyukur selalu membuat hari menjadi lebih baik.",
            "Ketika hidup memberimu alasan untuk menyerah, berikan alasan untuk tetap melangkah.",
            "Keberhasilan dimulai dengan langkah pertama. Lakukan sekarang!",
            "Hari ini adalah hari yang bagus untuk menciptakan masa depan yang cerah.",
            "Setiap masalah memiliki solusi. Terus berpikir positif!",
            "Saat kita bersyukur, hidup menjadi lebih indah.",
        ];

        // Get a random message from the array
        $randomMessage = $inspirationalMessages[array_rand($inspirationalMessages)];

        return redirect('/mood')->with('success', 'Mood successfully stored.')->with('randomMessage', $randomMessage);
    }
}
