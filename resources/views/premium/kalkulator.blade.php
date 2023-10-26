@extends('layouts.main')

@include('partials.navbar')

<div class="min-h-screen flex items-center justify-center">
    <div class="container max-w-md p-6 bg-white rounded-lg shadow-lg mr-4">
      <h2 class="text-2xl font-bold mb-4 text-slate-800">Kalkulator Relaksasi</h2>
      <form
        id="relaxation-calculator"
        class="mb-6"
      >
        <label for="exercise-type" class="block font-semibold mb-2 text-slate-800">
          Jenis Latihan:
        </label>
        <select
          id="exercise-type"
          name="exercise-type"
          class="w-full px-4 py-2 border rounded-lg bg-white"
        >
          <option value="meditasi">Meditasi</option>
          <option value="pernapasan">Pernapasan Dalam</option>
        </select>

        <label for="duration" class="block font-semibold mt-4 mb-2 text-slate-800">
          Durasi (menit):
        </label>
        <input
          type="number"
          id="duration"
          name="duration"
          min="1"
          required
          class="w-full px-4 py-2 border rounded-lg bg-white"
        />

        <button
          type="submit"
          class="w-full mt-4 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300"
        >
          Mulai
        </button>
      </form>

      <div
        id="result"
        class="hidden"
      >
        <h3 class="text-purple-500 text-xl">Silakan mulai latihan Anda.</h3>
        <p class="text-black">Waktu tersisa: <span id="countdown">00:00</span></p>
      </div>
    </div>

    <div class="container max-w-md p-6 bg-white rounded-lg shadow-lg ml-4">
        <h2 class="text-2xl font-bold mb-4 text-slate-800">Penghitung Napas</h2>
        <p class="text-black">Total Napas: <span id="breathCount" class="text-green-500 font-semibold">0</span></p>
        <button
          onclick="countBreaths()"
          class="w-full mt-4 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300"
        >
          Mulai Hitung Napas
        </button>
        <button
          onclick="resetBreaths()"
          class="w-full mt-4 px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300"
        >
          Ulang Jumlah Pernapasan
        </button>
      </div>      

    <script>
      const calculatorForm = document.getElementById("relaxation-calculator");
      const resultDiv = document.getElementById("result");
      const countdownSpan = document.getElementById("countdown");
      let countdownInterval;

      calculatorForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const exerciseType = calculatorForm.elements["exercise-type"].value;
        const duration = parseInt(calculatorForm.elements["duration"].value, 10);

        startExercise(exerciseType, duration);
      });

      function startExercise(exerciseType, duration) {
        resultDiv.style.display = "block";
        calculatorForm.style.display = "none";

        let remainingTime = duration * 60;
        updateCountdown(remainingTime);

        countdownInterval = setInterval(function () {
          remainingTime--;
          updateCountdown(remainingTime);

          if (remainingTime <= 0) {
            clearInterval(countdownInterval);
            resultDiv.innerHTML = "<h3 class='text-purple-500 text-xl'>Latihan selesai!</h3>";
          }
        }, 1000);
      }

      function updateCountdown(seconds) {
        const minutes = Math.floor(seconds / 60);
        const remainingSeconds = seconds % 60;
        countdownSpan.textContent = `${String(minutes).padStart(2, "0")}:${String(
          remainingSeconds
        ).padStart(2, "0")}`;
      }

      var breathCount = 0;

      function countBreaths() {
        breathCount++;
        document.getElementById("breathCount").textContent = breathCount;
      }

      function resetBreaths() {
        breathCount = 0;
        document.getElementById("breathCount").textContent = breathCount;
      }
    </script>