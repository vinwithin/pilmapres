<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        return view('guest.beranda');
    }
    public function peringkat(){
        return view('guest.peringkat');
    }
}
