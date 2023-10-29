@extends('layouts.main')

<div class="flex flex-col justify-center items-center mt-20">
    <h1 class="text-3xl mb-4 text-slate-800">Laporkan Pengguna</h1>
    <div class="w-full max-w-md bg-white p-4 rounded-lg shadow-md">
        <form action="{{ route('admin.reportUser', $user->id) }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="report_reason" class="block text-gray-700 text-sm font-bold mb-2">Alasan Pelaporan</label>
                <textarea id="report_reason" name="report_reason" class="w-full text-slate-800 px-3 py-2 border rounded-lg focus:outline-none bg-white focus:ring focus:border-orange-500" rows="4" required></textarea>
            </div>
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-800 w-full">Laporkan Pengguna</button>
        </form>
        <div class="flex flex-col justify-center items-end mt-4">
            <a href="{{ route('admin') }}" class="text-slate-400 hover:underline">
                <span class="mr-2"><i class="fas fa-arrow-left"></i> Kembali</span>
            </a>
        </div>              
    </div>
</div>
