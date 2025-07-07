<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UKM;

class UKMController extends Controller
{
    public function index()
    {
        $ukms = UKM::all();
        return view('ukm', compact('ukms'));
    }

    // Tambahkan ini buat tombol daftar UKM
    public function daftar($id)
    {
        $ukm = UKM::find($id);

        if (!$ukm) {
            return back()->with('error', 'UKM tidak ditemukan.');
        }

        //  Di sini kamu bisa tambahkan logika simpan ke tabel pendaftaran jika ada
        // contoh: PendaftaranUKM::create([...]);

        return back()->with('success', 'Berhasil mendaftar ke UKM ' . $ukm->nama_ukm);
    }
}