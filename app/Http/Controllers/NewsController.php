<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($slug)
    {
        // Assuming you have a model named News and a route parameter named 'slug'
        $berita = News::where('slug', $slug)->first();

        return view('berita/show', compact('berita'));
    }
}
