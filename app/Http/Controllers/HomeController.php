<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
        return view('entrada.index');
    }

    public function edit() {
        return view('entrada.edit');
    }

    public function update(Request $request, $id ){
        $entrada = \App\Entrada::find($id);
        $entrada->nombre = $request->input('txtNombre');
        $entrada->descripcion = $request->input('txtDescripcion');
        $entrada->imagen = $request->input('imgImagenGeneral');
        $entrada->documento = $request->input('docDocumento');

        $respuesta = array();

        $respuesta["entrada"] = $id;
        return redirect()->route('entrada.edit',$respuesta);
    }

    public function matematicas() {
        return view('matematicas.html');
    }
}
