<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensaje;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $mensajes = Mensaje::orderBy('viewed', 'ASC')->orderBy("created_at", "DESC")->paginate(10);


        return view('mensajes', compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $mensaje = new Mensaje;
        $mensaje->nombre_apellido = $request->input('nombre');
        $mensaje->email = $request->input('email');
        $mensaje->telefono = $request->input('telefono');
        $mensaje->mensaje = $request->input('consulta');
        $mensaje->viewed = 0;

        //dd($mensaje);

        $mensaje->save();

        return redirect()->route('home')->with('mensaje_creado', 'Se envió la consulta correctamente, lo responderemos en la brevedad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $mensaje = Mensaje::findOrfail($id);
        $mensaje->viewed = 1;
        $mensaje->update();

        //dd($mensaje);

        return redirect()->route('mensajes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        $mensaje = Mensaje::findOrFail($id);
        $mensaje->delete();

        return redirect()->route('mensajes');
    }
}
