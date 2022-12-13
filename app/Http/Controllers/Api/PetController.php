<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pet;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
je     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //consulta eloquent laravel 
         $mascota = pet::all() ;
         return response()->json(['petsApi',$mascota],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input=request()->all();
        pet::create($input);
        //mensaje
        return ('se ha Creado la Mascota correctamente');
        
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
        return Response()->json($mascot,200);
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
        $Eddpet = Pet::findOrFail($id);
        $input=$request->all();
        $Eddpet->update($input);
        return ('se ha actualizado la Informacion de las Mascota correctamente');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar
        $endPet = Pet::findOrFail($id);
        $endPet->delete();
        //vista mensaje
        return ('se ha eliminado el usuario correctamente');
       
    }
}
