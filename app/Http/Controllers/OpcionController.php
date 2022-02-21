<?php

namespace App\Http\Controllers;

use App\Models\Opcion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOpcion;

class OpcionController extends Controller
{
    public function index(){
        
        $opcion = Opcion::paginate();

        return view("opciones.index",compact('opcion'));
    }

    public function create(){
        return view("panel.opciones.create");
    }
    
    public function show(){
        $opcion = Opcion::paginate();
        return view("panel.opciones.index", compact('opcion'));
    }

    public function store(StoreOpcion $request)
    {
        $opcion = Opcion::create($request->all());

        return redirect()->route("panel.opciones.index",$opcion); //->with("ok","Menu Creado!");

    }
    
    public function edit(Opcion $opcion)
    {
        return view("panel.opciones.edit", compact('opcion'));
    }
    public function update(Request $request, Opcion $opcion)
    {
        $request->validate(
            [
            "imagen" => 'required',
            "nombre"=>'required',
            "descripcion"=>'required',
            ]
        );

        $opcion->update($request->all());
       
        return redirect()->route("panel.opciones.index");
    }
    public function destroy(opcion $opcion)
    {

        $opcion->delete();
       
        return redirect()->route("panel.opciones.index"); 
    }

}
