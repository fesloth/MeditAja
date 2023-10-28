@extends('layouts.main')

<div class="container mx-auto p-5 mt-28 text-slate-700">
    <div class="md:w-1/2 mx-auto">
        <div class="bg-white p-5 rounded-lg shadow-md">
            <h1 class="text-center text-2xl font-semibold">Edit Task List</h1>
            <form action="/editTodo/update/{{ $task->id }}" method="post" class="mt-4">
                @csrf <!-- Token CSRF untuk keamanan -->
                @method('PUT') <!-- Metode HTTP untuk update -->
                <div class="mb-4">
                    <label for="description" class="block mb-2">Todo</label>
                    <input name="description" value="{{$task->description}}" type="text" placeholder="Enter your task..." autofocus autocomplete="off" id="description" class="w-full px-3 py-2 border rounded bg-white">
                </div>
                <div class="mb-4">
                    <label for="deadline" class="block mb-2">Deadline</label>
                    <input type="date" name="deadline" value="{{$task->deadline}}" class="w-full px-3 py-2 border rounded bg-white">
                </div>
                <div class="mb-4">
                    <label for="priority" class="block mb-2">Priority</label>
                    <select name="priority" id="priority" class="w-full px-3 py-2 border rounded bg-white">
                        <option value="">Choose</option>
                        <option value="High" {{ $task->priority === 'High' ? 'selected' : '' }}>High</option>
                        <option value="Medium" {{ $task->priority === 'Medium' ? 'selected' : '' }}>Medium</option>
                        <option value="Low" {{ $task->priority === 'Low' ? 'selected' : '' }}>Low</option>
                    </select>
                </div>
                <div class="mb-4 flex justify-center items-center">
                    <button class="bg-[6EA066] text-white px-4 py-2 rounded hover:bg-[91D086]" name="submit" type="submit">Update Task</button>
                </div>
            </form>
            @if (session('success'))
        <script>
            alert("{{ session('success') }}");
            window.location.href = '/todo';
        </script>
        @endif
            <a href="/todo" id="button" class="text-[6EA066]"><i class="fas fa-arrow-left mr-2"></i>Back</a>
        </div>
    </div>
</div>