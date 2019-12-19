<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function create(Request $request){
        //dd($request);
        dd($request->foto);
        
    }
}
