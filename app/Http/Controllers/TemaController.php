<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TemaController extends Controller
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
            $temas = \App\Tema::all();
            $argumentos = array();

            $exito = $request->input('exito');
            $borrado = $request->input('borrado');

            $argumentos["temas"] = $temas;
            $argumentos["exito"] = $exito;
            $argumentos["borrado"] = $borrado;
            return view("temas.index", $argumentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $argumentos = array();
        return view('temas.create', $argumentos);
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

        $nuevoTema = new \App\Tema;
        $nuevoTema->nombre = $nombre;
        $nuevoTema->descripcion = $descripcion;

        $respuesta = array();
        $respuesta["exito"] = false;
        if ($nuevoTema->save()) {
            $respuesta["exito"] = true;
        }

        return redirect()->route('temas.index',$respuesta);

        
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
        $tema = \App\Tema::find($id);
        $exito = $request->input('exito');
        
        $argumentos = array();
        //trae todos los subtemas del tema que pido
        $subtemas = \App\Subtema::where('idTema','=', $id)->get();
        $argumentos['tema'] = $tema;
        $argumentos['exito'] = $exito;

        return view('temas.edit',$argumentos);

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
        $tema = \App\Tema::find($id);
        $tema->nombre = $request->input('txtNombre');
        $tema->descripcion = $request->input('txtDescripcion');

        $respuesta = array();
        $respuesta["exito"]=false;

        if($tema->save()){

            $respuesta["exito"]= true;
        }
        $respuesta["temas"] = $id;
        return redirect()->route('temas.edit',$respuesta);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tema = \App\Tema::find($id);
        $resultado = array();
        $resultado["borrado"] = false;

        if($tema->delete()){
            $resultado["borrado"] = true;
        }
        return redirect()->route('temas.index', $resultado);
    }

    public function createSubtema(Request $request, $idTema) {
        $argumentos = array();
        $argumentos['idTema'] = $idTema;
        return view('subtemas.create', $argumentos);
    }

    public function storeSubtema(Request $request, $idTema) {
        $nombre = $request->input('txtNombre');
        $descripcion = $request->input('txtDescripcion');
        $video = $request->input('txtVideo');
        $documento = $request->input('txtDocumento');
        
        $nuevoSubtema = new \App\Subtema;
        $nuevoSubtema->nombre = $nombre;
        $nuevoSubtema->descripcion = $descripcion;
        $nuevoSubtema->video = $video;
        $nuevoSubtema->documento = $documento;
        $nuevoSubtema->idTema = $idTema;

        $respuesta = array();
        $respuesta["exito"] = false;
        if ($nuevoSubtema->save()) {
            $respuesta["exito"] = true;
        }

        return redirect()->route('temas.subtemas.create', $respuesta);
    }
}
