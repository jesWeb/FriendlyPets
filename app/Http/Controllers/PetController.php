<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pet;

class PetController extends Controller
{//
    public function index()
    {
        //consulta base de datos 
        $mascota = pet::all() ;
        //return $mascota;
 
        return view('Mascota.index',compact('mascota') ) ;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Mascota.add');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //formulario almacenamiento de datos
      $pet = new Pet;
      $pet->name= $request->input('name');
      $pet->sexo= $request->input('sexo');
      $pet->edad= $request->input('edad');
      $pet->tamaño= $request->input('tamaño');
      $pet->raza= $request->input('raza');
      $pet ->save();
    //   return $pet;
      return redirect('Mascota.index')->with('mesagge', 'has creado un usuario exitosamente ');
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
        $mascot = Pet::find($id);
        return view('Mascota.show',compact('mascot'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //editar mascota
        $Eddpet = Pet::find($id);
        //tester
        //return $Eddpet
        //vista
        return view('Mascota.edit',compact('Eddpet'));
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
          /* desarrollamos nuestra logica */
       $Eddpet = Pet::findOrFail($id);
       $input=$request->all();
       $Eddpet->update($input);
       return redirect('mascota')->with('mesagge','Se ha actualizado el registro correctamente');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        //ELIMINAR
        $endPet = Pet::findOrFail($id);
        $endPet->delete();
        return redirect('mascota')->with('mesagge','Se ha eliminado correctamente la mascota');
    }
}
