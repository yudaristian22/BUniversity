<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Lecture;
use Illuminate\Http\Request;

class SdmController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        $lectures = Lecture::all();

        return view('sdm', compact('admins', 'lectures'));
    }
}
