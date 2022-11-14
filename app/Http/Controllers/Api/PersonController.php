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
          //return $users;
          return response()->json(['person'=>$users,200]);
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
        return ('el cliente se dio de alta con exito ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
        return ('el cliente se actualizo con exito');
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
       $user = person::findOrFail($id);
       $user->delete();
       //vista mensaje
       return ('el grupo se elimino de manera correcta');
    }
}
