<?php

namespace App\Http\Controllers;

use App\Personas;
use Illuminate\Http\Request;
use App\Http\Requests\PersonasRequest;
use Laracasts\Flash\flash;
class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Personas::all();
        $num=0;

        return view('admin.personas.index', compact('personas','num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonasRequest $request)
    {
        //validando que la cédula no esté registrada
        $buscar=Personas::where('cedula',$request->cedula)->first();
        $encontrados=count($buscar);

        if ($encontrados>0) {
            flash("LA CÉDULA YA HA SIDO REGISTRADA!", 'error'); 
            return redirect()->route('personas.create')->withInput();
        } else {
            $persona=Personas::create(['nombres' => $request->nombres,
                                'apellidos' => $request->apellidos,
                                'nacionalidad' => $request->nacionalidad,
                                'cedula' => $request->cedula]);
            flash("REGISTRO EXITOSO!", 'success'); 
            return redirect()->route('personas.index');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona=Personas::find($id);

        return view('admin.personas.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(PersonasRequest $request, $id)
    {
        //validando que la cédula no esté registrada
        $buscar=Personas::where('cedula',$request->cedula)->where('id','<>',$id)->first();
        $encontrados=count($buscar);

        if ($encontrados>0) {
            flash("LA CÉDULA YA HA SIDO REGISTRADA!", 'error'); 
            return redirect()->route('personas.create')->withInput();
        } else {
            $persona=Personas::find($id);

            $persona->nombres=$request->nombres;
            $persona->apellidos=$request->apellidos;
            $persona->nacionalidad=$request->nacionalidad;
            $persona->cedula=$request->cedula;
            $persona->save();
            flash("ACTUALIZACIÓN EXITOSA EXITOSO!", 'success'); 
            return redirect()->route('personas.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $persona=Personas::find($request->id_persona);

        if ($persona->delete()) {
        flash("ELIMINACIÓN EXITOSA!", 'success'); 
            return redirect()->route('personas.index');
        } else {
        flash("NO SE PUDO REALIZAR LA ELIMINACIÓN!", 'error'); 
            return redirect()->route('personas.index');
        }
        
    }
}
