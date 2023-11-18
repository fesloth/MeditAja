@extends('layouts.main')

<div class="container mx-auto p-5 mt-28 text-slate-700">
    <div class="md:w-1/2 mx-auto">
        <div class="bg-white p-5 rounded-lg shadow-md">
            <h1 class="text-center text-2xl font-semibold">Edit Tugas</h1>
            <form action="/editTodo/update/{{ $task->id }}" method="post" class="mt-4">
                @csrf <!-- Token CSRF untuk keamanan -->
                @method('PUT') <!-- Metode HTTP untuk update -->
                <div class="mb-4">
                    <label for="description" class="block mb-2">Kegiatan</label>
                    <input name="description" value="{{$task->description}}" type="text" placeholder="Enter your task..." autofocus autocomplete="off" id="description" class="w-full px-3 py-2 border rounded bg-white">
                </div>
                <div class="mb-4">
                    <label for="deadline" class="block mb-2">Tenggat Waktu</label>
                    <input type="date" name="deadline" value="{{$task->deadline}}" class="w-full px-3 py-2 border rounded bg-white">
                </div>
                <div class="mb-4">
                    <label for="priority" class="block mb-2">Prioritas</label>
                    <select name="priority" id="priority" class="w-full px-3 py-2 border rounded bg-white">
                        <option value="">Pilih Prioritas</option>
                        <option value="Tinggi" {{ $task->priority === 'Tinggi' ? 'selected' : '' }}>Tinggi</option>
                        <option value="Sedang" {{ $task->priority === 'Sedang' ? 'selected' : '' }}>Sedang</option>
                        <option value="Rendah" {{ $task->priority === 'Rendah' ? 'selected' : '' }}>Rendah</option>
                    </select>
                </div>
                <div class="mb-4 flex justify-center items-center">
                    <button class="bg-[6EA066] text-white px-4 py-2 rounded hover:bg-[91D086]" name="submit" type="submit">Update Tugas</button>
                </div>
            </form>
            @if (session('success'))
        <script>
            alert("{{ session('success') }}");
            window.location.href = '/todo';
        </script>
        @endif
            <a href="/todo" id="button" class="text-[6EA066]"><i class="fas fa-arrow-left mr-2"></i>Kembali</a>
        </div>
    </div>
</div>