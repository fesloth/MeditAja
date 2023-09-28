 @extends('layouts.main')
 
 <!-- Konten Utama -->
 <div class="container mx-auto mt-40 flex flex-col items-center">
     <!-- Form Edit Profil -->
     <form class="w-full max-w-md bg-white p-4 rounded-lg shadow-md">
        <h1 class="mb-7 mt-2 font-semibold text-slate-900 text-center text-2xl">Edit Profile</h1>
        <!-- Ubah Username -->
        <div class="mb-4">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username Anda</label>
            <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-lg focus:outline-none bg-white focus:ring focus:border-orange-500" value="Username Anda">
        </div>
        <div class="mb-4">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username Baru</label>
            <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-lg focus:outline-none bg-white focus:ring focus:border-orange-500">
        </div>
        <!-- Edit Gambar Profil -->
        <div class="mb-4">
            <label for="profileImage" class="block text-gray-700 text-sm font-bold mb-2">Gambar Profil</label>
            <input type="file" class="file-input file-input-bordered file-input-md w-full bg-white" />
        </div>
        <!-- Tombol Simpan -->
        <div class="text-center mb-3">
            <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600">Simpan</button>
        </div>
        <!-- Tombol Back dengan Font Awesome -->
        <a href="/profile" class="mt-4 text-orange-500 hover:text-orange-600">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </form>
</div>