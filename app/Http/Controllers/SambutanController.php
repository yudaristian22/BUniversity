<?php

namespace App\Http\Controllers;

use App\Models\Greeting;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    public function index()
    {
        $greetings = Greeting::all();

        return view('sambutan', compact('greetings'));
    }
}
