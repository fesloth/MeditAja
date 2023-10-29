@extends('layouts.main')

<div class="container mx-auto p-5 mt-28 text-slate-700">
    <div class="md:w-1/2 mx-auto">
        <div class="bg-white p-5 rounded-lg shadow-md">
            <h1 class="text-center text-2xl font-semibold">Tambah Tugas</h1>
            <form action="/storeTodo" method="post" class="mt-4">
                @csrf
                <div class="mb-4">
                    <label for="description" class="block mb-2">Kegiatan</label>
                    <input name="description" type="text" placeholder="Enter your task..." autofocus autocomplete="off" id="description" class="w-full px-3 py-2 border rounded bg-white" required>
                </div>
                <div class="mb-4">
                    <label for="deadline" class="block mb-2">Tenggat Waktu</label>
                    <input type="date" name="deadline" class="w-full px-3 py-2 border rounded bg-white" required>
                </div>
                <div class="mb-4">
                    <label for="priority" class="block mb-2">Prioritas</label>
                    <select name="priority" id="priority" class="w-full px-3 py-2 border rounded bg-white" required>
                        <option value="">Pilih Prioritas</option>
                        <option value="Tinggi">Tinggi</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Rendah">Rendah</option>
                    </select>
                </div>
                <div class="mb-4 flex justify-center items-center">
                    <button class="bg-[6EA066] text-white px-4 py-2 rounded hover:bg-[91D086]" name="submit" type="submit">Tambah</button>
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