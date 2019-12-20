<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;

class FotoController extends Controller
{
    public function create(Request $request){
        //dd($request);
        //dd($request->foto);
        $foto = new Foto;
        $imageName = time() . "." . $request->foto->extension();
        $foto->filename = $imageName;
        $foto->descripcion = $request->input('descripcion');
        $request->foto->move(public_path('img/Galeria'), $imageName);
        
        //dd($foto);

        $foto->save();

        return redirect()->route('home')->with('foto-update', 'Galería actualizada.');
    }
}
