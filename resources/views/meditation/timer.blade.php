@extends('layouts.main')

 <!-- Timer -->
<div class="container mx-auto mt-48 max-sm:mt-32 max-sm:mx-0">
    <div class="bg-white rounded-lg shadow-md mx-52 max-sm:mx-5">
      <div class="px-4 py-6 max-sm:px-2 max-sm:py-4">
        <h1 class="text-center text-slate-800 text-lg font-semibold">Timer</h1>
      </div>
      <div class="p-5">
        <div class="grid grid-cols-3 gap-4">
          <div class="col">
            <h2 class="text-center text-slate-800" id="timerMinutes">00</h2>
          </div>
          <div class="col">
            <h2 class="text-center text-slate-800" id="timerSeconds">00</h2>
          </div>
          <div class="col">
            <h2 class="text-center text-slate-800" id="timerMilliseconds">00</h2>
          </div>
        </div>
      </div>
      <div class="px-4 py-6">
        <div class="flex items-center mb-3 border rounded-md p-2">
            <span class="text-gray-700">Set Timer: </span>
            <select id="timerValue" class="select select-bordered mx-5 w-full max-w-full bg-white">
              <option value="300">5 minutes</option>
              <option value="900">15 minutes</option>
              <option value="1800">30 minutes</option>
              <option value="3600">1 hour</option>
            </select>
          </div>
          
        <div class="flex justify-center mt-5">
          <button class="bg-green-500 text-white px-4 py-2 mr-2 rounded-md" onclick="startTimer()">Start</button>
          <button class="bg-red-500 text-white px-4 py-2 mr-2 rounded-md" onclick="stopTimer()">Stop</button>
          <button class="bg-gray-500 text-white px-4 py-2 rounded-md" onclick="resetTimer()">Reset</button>
        </div>
        <div class="mt-3 flex justify-end items-end text-end">
            <a href="/todo" class="text-green-600 hover:text-green-700">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
  </div>
  <!-- Timer End -->  

  <script>
          // Timer
          var timerInterval;
      var timerMilliseconds = 0;
      var timerSeconds = 0;
      var timerMinutes = 0;
      var timerRunning = false;
      var timerDuration = 0;

      function updateTimer() {
        timerMilliseconds -= 10;

        if (timerMilliseconds < 0) {
          timerMilliseconds = 990;
          timerSeconds--;
        }

        if (timerSeconds < 0) {
          timerSeconds = 59;
          timerMinutes--;
        }

        if (timerMinutes < 0) {
          stopTimer();
          return;
        }

        document.getElementById("timerMinutes").textContent = timerMinutes < 10 ? "0" + timerMinutes : timerMinutes;
        document.getElementById("timerSeconds").textContent = timerSeconds < 10 ? "0" + timerSeconds : timerSeconds;
        document.getElementById("timerMilliseconds").textContent = timerMilliseconds < 10 ? "0" + timerMilliseconds : timerMilliseconds;
      }

      function startTimer() {
        if (!timerRunning) {
          timerDuration = parseInt(document.getElementById("timerValue").value);
          timerMinutes = Math.floor(timerDuration / 60);
          timerSeconds = timerDuration % 60;

          timerInterval = setInterval(updateTimer, 10);
          timerRunning = true;
        }
      }

      function stopTimer() {
        clearInterval(timerInterval);
        timerRunning = false;
      }

      function resetTimer() {
        clearInterval(timerInterval);
        timerMilliseconds = 0;
        timerSeconds = 0;
        timerMinutes = 0;
        timerRunning = false;
        document.getElementById("timerMinutes").textContent = "00";
        document.getElementById("timerSeconds").textContent = "00";
        document.getElementById("timerMilliseconds").textContent = "00";
      }
  </script>