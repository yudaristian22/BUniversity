<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\Announcement;
use App\Models\Cooperation;
use App\Models\News;
use App\Models\Rektor;

class LandingPageController extends Controller
{
    public function index()
    {
        $cooperationImg = Cooperation::all();
        $rectors = Rektor::all();
        $abouts = Aboutme::first();
        $announcements = Announcement::latest()->take(3)->get();
        $news = News::all();

        return view('landing', compact('cooperationImg', 'rectors', 'abouts', 'announcements', 'news'));
    }
}
