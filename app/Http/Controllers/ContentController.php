<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    // views

    public function todo()
    {
        return view('meditation.todolist', [
            "title" => "Todolist"
        ]);
    }

    public function music()
    {
        return view('meditation.music', [
            "title" => "Playlist"
        ]);
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
        return view('meditation.moodtracker', [
            "title" => "Mood Tracker"
        ]);
    }
}
