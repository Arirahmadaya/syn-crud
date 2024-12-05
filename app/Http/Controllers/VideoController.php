<?php

// app/Http/Controllers/VideoController.php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    // Menampilkan semua video
    public function index()
    {
        // Ambil semua video dari database
        $videos = Video::all();

        // Jika rute adalah dashboard (home page), kirim video ke dashboard.blade.php
        if (request()->is('/')) {
            return view('dashboard', compact('videos'));
        }

        // Untuk halaman video CRUD, kirim video ke videos.index.blade.php
        return view('videos.index', compact('videos'));
    }

    
    // Menampilkan form untuk membuat video baru
    public function create()
    {
        return view('videos.create');
    }

    // Menyimpan video baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'youtube_id' => 'required|string',
        ]);

        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'youtube_id' => $request->youtube_id,
        ]);

        return redirect()->route('videos.index');
    }

    // Menampilkan form untuk mengedit video
    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    // Memperbarui video
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'youtube_id' => 'required|string',
        ]);

        $video->update([
            'title' => $request->title,
            'description' => $request->description,
            'youtube_id' => $request->youtube_id,
        ]);

        return redirect()->route('videos.index');
    }

    // Menghapus video
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index');
    }
}
