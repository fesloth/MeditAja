@extends('layouts.main')

@include('partials.navbar')

<div class="flex justify-center items-center h-screen">
    <div class="px-28 py-28 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-[6EA066] hover:underline text-center">Pesan Pagi Positif <i class="fa fa-coffee"></i></h2>
        @foreach ($messages as $message)
            <p class="text-lg italic text-gray-700 hidden">{{ $message->content }}</p>
        @endforeach
        <button id="showMessage" class="bg-[6EA066] hover:bg-[91D086] rounded-lg text-white px-4 py-2 mt-4 mx-auto block">Tampilkan Pesan</button>
    </div>    

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const messages = document.querySelectorAll('.text-lg');
        const showMessageButton = document.getElementById('showMessage');
        let currentIndex = 0;
        let randomIndices = getRandomIndices(messages.length);

        showMessageButton.addEventListener('click', function() {
            if (currentIndex < randomIndices.length) {
                const indexToShow = randomIndices[currentIndex];
                hideAllMessages(); // Sembunyikan semua pesan
                messages[indexToShow].classList.remove('hidden'); // Tampilkan pesan yang sesuai
                currentIndex++;
            } else {
                showMessageButton.disabled = true;
            }
        });

        // Fungsi untuk menghasilkan indeks secara acak
        function getRandomIndices(max) {
            const indices = [];
            for (let i = 0; i < max; i++) {
                indices.push(i);
            }
            // Mengacak urutan indeks
            for (let i = indices.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [indices[i], indices[j]] = [indices[j], indices[i]];
            }
            return indices;
        }

        // Fungsi untuk menyembunyikan semua pesan
        function hideAllMessages() {
            messages.forEach(function (message) {
                message.classList.add('hidden');
            });
        }
    });
</script>


