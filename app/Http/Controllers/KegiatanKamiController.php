<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanKamiController extends Controller
{
    public function tahanpangan(){
      
        return view('kegiatan-kami.tahan-pangan');
    }
    public function model(){
      
        return view('kegiatan-kami.model');
    }
}
