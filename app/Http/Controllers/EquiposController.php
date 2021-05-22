<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Equipo;
use App\Http\Requests\StoreEquiposRequest;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index')
        ->with('equipos', $equipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipio::all();
        return view('equipos.create')
                    ->with('municipios', $municipios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEquiposRequest $request)
    {
        if($request->hasFile('escudo')){
            $file = $request->file('escudo');
            $escudo = time() . $file->getClientOriginalName();
            $file->move("images/equipos", $escudo);
        }
        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->dt = $request->dt;
        $equipo->municipio_id = $request->municipio;
        $equipo->escudo = $escudo;
        $equipo->save();
        return redirect()->route('equipos.index')->with('status', 'equipo creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipo = Equipo::find($id);
        return view('equipos.show')
        ->with('equipo', $equipo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        $municipios = Municipio::all();
        return view('equipos.edit')
                    ->with('equipo', $equipo)
                    ->with('municipios', $municipios);
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
        $equipo = Equipo::find($id);
        $equipo->nombre = $request->nombre;
        $equipo->dt = $request->dt;
        $equipo->municipio_id = $request->municipio;
        if($request->hasFile('escudo')){
            $file = $request->file('escudo');
            $escudo = $equipo->escudo;
            $file->move("images/equipos", $escudo);
        }
        $equipo->save();
        return redirect()->route('equipos.index')->with('status', 'equipo actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo = Equipo::find($id);
        $equipo->delete();
        return redirect()->route('equipos.index')->with('status', 'equipo eliminado');   
    }
}
