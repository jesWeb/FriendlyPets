<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consulta eloquent laravel 
           $users = person::all();
        //   //return $users;
           return response()->json(['usersApi',$users],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input=request()->all();
        person::create($input);
        //vista mensaje 
        return ('se ha Creado el usuario correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        //vista
        $Mostraruser = person::find($id);
        return Response()->json($Mostraruser,200);
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
        $EddUser = person::findOrFail($id);
        $input=$request->all();
        $EddUser->update($input);
        return ('se ha actualizado el usuario correctamente');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          //ELIMINAR
       $user = person::findOrFail($id);
       $user->delete();
       //vista mensaje
       return ('se ha eliminado el usuario correctamente');
    }
}
