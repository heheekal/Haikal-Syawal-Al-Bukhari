<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function create()
    {
        return view('laporan.form');
    }

    public function store(Request $request)
    {
        $laporan = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'lokasi' => ['required', 'string', 'max:255'],
            'tinggi' => ['required', 'numeric', 'min:0'],
        ]);

        return view('laporan.konfirmasi', compact('laporan'));
    }

    public function index()
    {
        $laporan = [
            ['nama' => 'Haikal Syawal Al Bukhari', 'lokasi' => 'Cileunyi, Desa Cinunuk', 'tinggi' => 25],
            ['nama' => 'Fikri Haikal Wibisan', 'lokasi' => 'Bojongsoang, Kecamatan Bojongsoang', 'tinggi' => 50],
            ['nama' => 'Hayfa Azalia Rania', 'lokasi' => 'Andir, Kecamatan Baleendah', 'tinggi' => 85],
            ['nama' => 'Kim Ha Yeon', 'lokasi' => 'Citeureup, Kecamatan Dayeuhkolot', 'tinggi' => 30],
        ];

        return view('laporan.index', compact('laporan'));
    }
}