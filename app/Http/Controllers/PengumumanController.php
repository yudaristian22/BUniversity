<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();

        return view('pengumuman.index', compact('announcements'));
    }

    public function show($slug)
    {
        $announcement = Announcement::where('slug', $slug)->firstOrFail();

        return view('pengumuman.show', compact('announcement'));
    }
}
