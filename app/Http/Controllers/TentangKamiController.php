<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function timkami(){
        return view('tentang-kami.tim-kami');
    }
    public function yangkamilayani(){
        return view('tentang-kami.yang-kami-layani');
    }
}
