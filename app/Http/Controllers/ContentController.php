<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use App\Models\Note;
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

        $jumlahCatatanPekerjaan = Note::where('category', 'Pekerjaan')->where('user_id', $user->id)->count();
        $jumlahCatatanPribadi = Note::where('category', 'Pribadi')->where('user_id', $user->id)->count();
        $jumlahCatatanPenting = Note::where('category', 'Penting')->where('user_id', $user->id)->count();
        $jumlahCatatanBelajar = Note::where('category', 'Belajar')->where('user_id', $user->id)->count();
        $jumlahCatatanProyek = Note::where('category', 'Proyek')->where('user_id', $user->id)->count();
        $jumlahCatatanLiburan = Note::where('category', 'Liburan')->where('user_id', $user->id)->count();
        $jumlahCatatanRutinitas = Note::where('category', 'Rutinitas')->where('user_id', $user->id)->count();
        $jumlahCatatanKesehatan = Note::where('category', 'Kesehatan')->where('user_id', $user->id)->count();
        $jumlahCatatanHobi = Note::where('category', 'Hobi')->where('user_id', $user->id)->count();
        $jumlahCatatanTeknologi = Note::where('category', 'Teknologi')->where('user_id', $user->id)->count();
        $jumlahCatatanOlahraga = Note::where('category', 'Olahraga')->where('user_id', $user->id)->count();
        $jumlahCatatanKuliner = Note::where('category', 'Kuliner')->where('user_id', $user->id)->count();
        $jumlahCatatanSeni = Note::where('category', 'Seni')->where('user_id', $user->id)->count();
        $jumlahCatatanTugasSekolah = Note::where('category', 'Tugas Sekolah')->where('user_id', $user->id)->count();
        $jumlahCatatanTravel = Note::where('category', 'Travel')->where('user_id', $user->id)->count();
        $jumlahCatatanMusik = Note::where('category', 'Musik')->where('user_id', $user->id)->count();
        $jumlahCatatanFilm = Note::where('category', 'Film')->where('user_id', $user->id)->count();
        $jumlahCatatanBuku = Note::where('category', 'Buku')->where('user_id', $user->id)->count();
        $jumlahCatatanOtomotif = Note::where('category', 'Otomotif')->where('user_id', $user->id)->count();

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
            "jumlahCatatanPekerjaan" => $jumlahCatatanPekerjaan,
            "jumlahCatatanPribadi" => $jumlahCatatanPribadi,
            "jumlahCatatanPenting" => $jumlahCatatanPenting,
            "jumlahCatatanBelajar" => $jumlahCatatanBelajar,
            "jumlahCatatanProyek" => $jumlahCatatanProyek,
            "jumlahCatatanLiburan" => $jumlahCatatanLiburan,
            "jumlahCatatanRutinitas" => $jumlahCatatanRutinitas,
            "jumlahCatatanKesehatan" => $jumlahCatatanKesehatan,
            "jumlahCatatanHobi" => $jumlahCatatanHobi,
            "jumlahCatatanTeknologi" => $jumlahCatatanTeknologi,
            "jumlahCatatanOlahraga" => $jumlahCatatanOlahraga,
            "jumlahCatatanKuliner" => $jumlahCatatanKuliner,
            "jumlahCatatanSeni" => $jumlahCatatanSeni,
            "jumlahCatatanTugasSekolah" => $jumlahCatatanTugasSekolah,
            "jumlahCatatanTravel" => $jumlahCatatanTravel,
            "jumlahCatatanMusik" => $jumlahCatatanMusik,
            "jumlahCatatanFilm" => $jumlahCatatanFilm,
            "jumlahCatatanBuku" => $jumlahCatatanBuku,
            "jumlahCatatanOtomotif" => $jumlahCatatanOtomotif,
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
        $user = Auth::user(); // Mengambil pengguna yang sedang masuk

        $task = new Todo();
        $task->description = $request->description;
        $task->deadline = $request->deadline;
        $task->priority = $request->priority;
        $task->status = $request->status ?? 'On progress';

        // Mengaitkan tugas dengan pengguna yang sedang masuk
        $task->user_id = $user->id;

        $task->save();

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

    public function notes()
    {
        $user = Auth::user();

        $notes = Note::where('user_id', auth()->id())->paginate(5);

        $jumlahCatatanPekerjaan = Note::where('category', 'Pekerjaan')->where('user_id', $user->id)->count();

        return view('dashboard.notes', [
            "title" => "Notes",
            'notes' => $notes,
            'user' => $user,
            "jumlahCatatanPekerjaan" => $jumlahCatatanPekerjaan,
        ]);
    }


    public function create()
    {
        $user = Auth::user();

        return view('dashboard.action.create', [
            "title" => "Notes",
            "user" => $user
        ]); // 'notes.create' adalah nama tampilan yang akan Anda buat.
    }

    public function filterNotes(Request $request)
    {
        $user = Auth::user();
        $category = $request->input('category');
    
        // Query catatan berdasarkan kategori yang dipilih
        $query = Note::query();
    
        if ($category != "") {
            $query->where('category', $category);
        }
    
        $notes = $query->where('user_id', auth()->id())->paginate(5);
    
        return view('dashboard.notes', [
            'title' => 'Notes',
            'notes' => $notes,
            "user" => $user
        ]);
    }    

    public function editNote($id)
    {
        $note = Note::find($id);

        return view('dashboard.action.edit', [
            "title" => "Edit Note",
            'note' => $note,
        ]);
    }

    public function updateNote(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
        ]);

        $note = Note::find($id);
        $note->title = $validatedData['title'];
        $note->content = $validatedData['content'];
        $note->category = $validatedData['category'];
        $note->save();

        return redirect('/notes')->with('success', 'Catatan berhasil diperbarui.');
    }

    public function storeNotes(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Create a new Note instance and save it to the database
        $newNote = new Note();
        $newNote->title = $validatedData['title'];
        $newNote->content = $validatedData['content'];
        $newNote->category = $request->input('category'); // Ambil nilai kategori dari input
        // Assuming you're associating notes with the currently authenticated user.
        $newNote->user_id = auth()->id();

        $newNote->save();

        return redirect('/notes')->with('success', 'Catatan berhasil disimpan.');
    }

    public function deleteNote($id)
    {
        $note = Note::find($id);

        if ($note) {
            // Pastikan catatan dimiliki oleh pengguna yang saat ini diautentikasi
            if ($note->user_id === auth()->id()) {
                $note->delete();
                return redirect('/notes')->with('success', 'Catatan berhasil dihapus.');
            } else {
                return redirect('/notes')->with('error', 'Anda tidak memiliki izin untuk menghapus catatan ini.');
            }
        } else {
            return redirect('/notes')->with('error', 'Catatan tidak ditemukan.');
        }
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
        $user = Auth::user();

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
            "randomMessage" => $randomMessage,
            "user" => $user
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

    public function kalk()
    {
        $user = Auth::user();
        
        return view ('premium.kalkulator', [
            "title" => "Kalkulator Kesehatan",
            "calculator" => true,
            "user" => $user
        ]);
    }
}
