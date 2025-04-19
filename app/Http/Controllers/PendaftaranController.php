<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        // Validasi Data Form
        $request->validate([
            'namalengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'jalur' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'namapanggilan' => 'required|int|max:255',
            'nomor_hp' => 'required|string|max:15',
            'programstudi_1' => 'required|string',
            'programstudi_2' => 'nullable|string',
        ]);

        // Mengupload Image dan Menyimpan nama file
        $fotoName = null;
        if ($request->hasFile('image')) {
            // Mendapatkan nama file yang unik
            $fotoName = time() . '.' . $request->file('image')->getClientOriginalName();

            // Simpan file di strorage dengan path yang tepat
            $path = $request->file('image')->storeAs('uploads/students', $fotoName, 'public');

            // Debugging cek apakah file disimpan
            if (!$path) {
                return back()->with('error', 'Gambar gagal disimpan!');
            }
        }

        Student::create([
            'namalengkap' => $request->namalengkap,
            'email' => $request->email,
            'jalur' => $request->jalur,
            'image' => $fotoName,
            'namapanggilan' => $request->namapanggilan,
            'nomor_hp' => $request->nomor_hp,
            'programstudi_1' => $request->programstudi_1,
            'programstudi_2' => $request->programstudi_2,
        ]);

        return back()->with('success', 'Pendaftaran berhasil!');
    }
}
