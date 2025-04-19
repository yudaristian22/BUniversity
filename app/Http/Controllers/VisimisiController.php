<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index()
    {
        $visimisi = Visimisi::all();

        if ($visimisi) {
            $visi = $visimisi->visi;
            $misi = $visimisi->misi;
            $visimisiImg = $visimisi->img;
        } else {
            $visi = 'No Data Available';
            $misi = 'No Data Available';
            $visimisiImg = [];
        }

        return view('visimisi', compact('visi', 'misi', 'visimisiImg'));
    }
}
