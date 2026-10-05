<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function formulir()
    {
        return view('formulir');
    }

    public function inputData(Request $requestData)
    {
        $nama = $requestData->input('nama');
        $nim = $requestData->input('nim');
        $prodi = $requestData->input('prodi');

        return view('tampilkanData', compact('nama', 'nim', 'prodi'));
    }
}
