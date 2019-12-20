<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fotos = Foto::all();
        return view('index', compact('fotos', $fotos));
    }
}
