<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sede;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SedeController extends Controller
{
       /**
     * Mostrar una lista del recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sedes = Sede::all();
        return view('admin.sedes.index',compact('sedes'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sedes.create');


    }

    /**
     * Almacene un recurso recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sede::create([
            'name' => $request->name,

        ]);

        return to_route('admin.sedes.index');
    }

    /**
     * Muestra el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sede $sede)
    {
        return view('admin.sedes.edit',compact('sede'));
    }

    /**
     * Actualice el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sede $sede)
    {

        $request->validate([
            'name' => 'required'
        ]);
        $sede->update([
            'name' => $request->name
        ]);
        return to_route('admin.sedes.index');
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sede $sede)
    {
        $sede->delete();


        return to_route('admin.sedes.index');
    }
}
