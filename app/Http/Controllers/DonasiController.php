<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function donasidana(){
        return view('donasi.donasi-dana');
    }
}
