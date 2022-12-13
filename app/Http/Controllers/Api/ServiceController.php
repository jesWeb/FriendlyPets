<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consulta eloquent
        $services = service::all();
        return response()->json(['ServiceApi'=>$services,200]);
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
        service::create($input);

        return ('se ha Creado el usuario correctamente');

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
        $service = Service::find($id);
        return Response()->json($service,200);
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
        $ServUp = Service::find($id);
        $input=$request->all();
        $ServUp->update($input);
        //mensaje de vista 
       //vista
       return ('se ha Creado el usuario correctamente');

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
        $Dserv = Service::findOrFail($id);
        $Dserv->delete();
        //mensaje de vista
        return ('Se ha Eliminado el usuario correctamente');
    }
}
