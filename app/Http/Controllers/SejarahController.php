<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $historys = History::all();

        return view('sejarah', compact('historys'));
    }
}
