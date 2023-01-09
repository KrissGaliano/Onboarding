<?php

namespace App\Http\Controllers\Admin;

use App\Models\Puesto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PuestoController extends Controller
{
    /**
     * Mostrar una lista del recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $puestos = Puesto::all();
        return view('admin.puestos.index',compact('puestos'));

    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.puestos.create');

    }

    /**
     * Almecene un recurso recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Puesto::create([
                'name' => $request->name,

            ]);

            return to_route('admin.puestos.index');


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
    public function edit(Puesto $puesto)
    {
        return view('admin.puestos.edit',compact('puesto'));


    }

    /**
     * Actualice el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puesto $puesto)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $puesto->update([
            'name' => $request->name
        ]);
        return to_route('admin.puestos.index');

    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puesto $puesto)
    {

        $puesto->delete();


        return to_route('admin.puestos.index');
    }
}
