<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // return halaman landing
        return view('landing'); // pastikan file resources/views/landing.blade.php ada
    }
}
