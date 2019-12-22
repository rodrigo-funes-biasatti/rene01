<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use File;

class FotoController extends Controller
{
    public function create(Request $request)
    {
        $uploadFile = $request->file('foto');
        //dd($request);
        //dd($request->foto);
        //dd($uploadFile);
        $foto = new Foto;
        $imageName = $uploadFile->getClientOriginalName();
        $foto->filename = $imageName;
        $foto->descripcion = $request->input('descripcion');
        $request->foto->move(public_path('img/Galeria'), $imageName);
        
        //dd($foto);

        $foto->save();

        return redirect()->route('home')->with('foto-update', 'Galería actualizada.');
    }

    public function delete($id)
    {
        //dd($id);
        //return redirect()->route('home')->with('fail-delete-foto', 'No se ha podido eliminar la foto con éxito.');
        if(Foto::where('foto_id', "=", $id)->exists())
        {
            $foto = Foto::where('foto_id', "=", $id);
            //dd($foto);
            $foto_path = public_path('img\Galeria\\' . $foto->first()->filename);
            //dd($foto_path);

            File::delete($foto_path);
            $foto->delete();
            return redirect()->route("home")->with('delete-foto', 'Se ha eliminado la fotode la galería con éxito.');
        }
        else
        {
            return redirect()->route('home')->with('fail-delete-foto', 'No se ha podido eliminar la foto con éxito.');
        }
    }
}
