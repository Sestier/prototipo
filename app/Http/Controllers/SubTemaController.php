<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SubTemaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Hacer en todas las funciones
        $usuario = $request->user();
        if ($usuario->idTipoUsuario == 1) {
            $subtemas = \App\Subtema::all();
            $argumentos = array();

            $exito = $request->input('exito');
            $borrado = $request->input('borrado');

            $argumentos["subtemas"] = $subtemas;
            $argumentos["exito"] = $exito;
            $argumentos["borrado"] = $borrado;
            return view("subtemas.index", $argumentos);
        } else {
            return redirect()->route('index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $argumentos = array();
        return view('subtemas.create', $argumentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre = $request->input('txtNombre');
        $descripcion = $request->input('txtDescripcion');

        $nuevoSubtema = new \App\Subtema;
        $nuevoSubtema->nombre = $nombre;
        $nuevoSubtema->descripcion = $descripcion;

        $respuesta = array();
        $respuesta["exito"] = false;
        if ($nuevoSubtema->save()) {
            $respuesta["exito"] = true;
        }

        return redirect()->route('subtemas.index',$respuesta);

        
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
    public function edit(Request $request, $id)
    {
        $subtema = \App\Subtema::find($id);
        $exito = $request->input('exito');

        $argumentos = array();
        $argumentos['subtema'] = $subtema;
        $argumentos['exito'] = $exito;

        return view('subtemas.edit',$argumentos);

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
        $subtema = \App\Subtema::find($id);
        $subtema->nombre = $request->input('txtNombre');
        $subtema->descripcion = $request->input('txtDescripcion');

        $respuesta = array();
        $respuesta["exito"]=false;

        if($subtema->save()){

            $respuesta["exito"]= true;
        }
        $respuesta["subtemas"] = $id;
        return redirect()->route('subtemas.edit',$respuesta);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subtema = \App\Subtema::find($id);
        $resultado = array();
        $resultado["borrado"] = false;

        if($subtema->delete()){
            $resultado["borrado"] = true;
        }
        return redirect()->route('subtemas.index', $resultado);
    }
}
