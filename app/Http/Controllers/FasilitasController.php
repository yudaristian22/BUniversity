<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();

        return view('fasilitas', compact('fasilitas'));
    }
}
