@extends('layouts.main')

<!-- Konten Utama -->
<div class="container mx-auto mt-24 flex flex-col items-center">
    <!-- Form Edit Profil -->
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-md bg-white p-4 rounded-lg shadow-md">
        @csrf <!-- Token CSRF Laravel -->
        <div class="mb-4 text-center">
            <label for="profileImage" class="block text-gray-700 text-sm font-bold mb-2">
                Foto Profil
                @if ($user->profile_image)
                    <a class="cursor-pointer text-red-600" onclick="deleteProfileImage()">- Hapus</a>
                @endif
            </label>            
            <div class="relative inline-block">
                <div class="w-32 h-32 bg-gray-300 rounded-full flex justify-center items-center relative">
                    @if ($user->profile_image)
                        <!-- Ganti sumber gambar (src) sesuai dengan gambar pengguna -->
                        <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Gambar Pengguna" class="w-32 h-32 rounded-full object-cover">
                    @else
                        <div class="text-4xl text-slate-700 bg-white rounded-full w-32 h-32 flex items-center justify-center">
                            <i class="fas fa-user"></i> <!-- Ikon pengguna default -->
                        </div>
                    @endif
                    <label for="profileImage" class="absolute cursor-pointer top-0 left-0 w-32 h-32 flex items-center justify-center opacity-0">
                        <i class="fas fa-pencil-alt text-gray-600 text-2xl"></i>
                        <input type="file" name="profile_image" class="absolute top-0 left-0 w-32 h-32 opacity-0 cursor-pointer" />
                    </label>
                </div>
            </div>
            <p class="text-gray-500 text-sm mt-1">Anda bisa mengunggah file GIF!</p>
        </div>
        <!-- Ubah Username -->
        <div class="mb-4">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username Anda</label>
            <input type="text" id="username" name="username" class="w-full text-slate-800 px-3 py-2 border rounded-lg focus:outline-none bg-white focus:ring focus:border-orange-500" disabled value="{{ $user->username }}">
        </div>
        <div class="mb-4">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username Baru</label>
            <input type="text" id="new_username" name="new_username" class="w-full text-slate-800 px-3 py-2 border rounded-lg focus:outline-none bg-white focus:ring focus:border-orange-500" required>
            <p class="text-gray-500 text-sm mt-1">Apabila Anda hanya ingin mengganti foto profil, tuliskan ulang username lama Anda.</p>
        </div>
        <!-- Tombol Simpan -->
        <div class="text-center mb-3">
            <button type="submit" class="bg-[6EA066] text-white px-4 py-2 rounded-lg hover-bg-[91D086]">Simpan</button>
        </div>
        <!-- Tombol Back dengan Font Awesome -->
        <a href="/profile" class="mt-4 text-lime-500 hover-text-lime-600">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </form>
</div>
<script>
    function deleteProfileImage() {
        if (confirm("Apakah Anda yakin ingin menghapus gambar profil?")) {
            // Redirect to the controller action to delete the profile image
            window.location.href = "{{ route('profile.delete.image') }}";
        }
    }
</script>

