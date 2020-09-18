<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lokasi;
use App\User;

class LokasiController extends Controller
{
    public function viewLokasi(){
        $data_lokasi = Lokasi::all();
        // dd($data_lokasi);
        return view('lokasi.lokasi',['data' => $data_lokasi]);
    }
  
}
