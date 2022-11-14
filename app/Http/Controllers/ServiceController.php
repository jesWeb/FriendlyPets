<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
class ServiceController extends Controller
{
    public function index()
    {
        //consulta eloquent laravel 
        $services = service::all();
        //return $serv;        
        return view('Servicio.index',compact('services'));

    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //vista de creacion de servicio
        $CreateServ = service::all('id','name','costo','descripcion');
        return view('Servicio.add',compact('CreateServ'));
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
      $service = new Service;
      $service->name=$request->input('name');
      $service->costo=$request->input('costo');
      $service->descripcion=$request->input('descripcion');
      $service ->save();
      //return $service;
      //vista 
      return redirect('servicio')->with('message','Se ha creado correctamente el servicio');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //vizualizar 
        $service = Service::find($id);
        return view ('Servicio.show',compact('service'));

    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        //editar servicio
        $Eddserv =Service::find($id);
        //vista
        return view('Servicio.edit',compact('Eddserv'));

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
         /* logica */
        $ServUp = Service::find($id);
        $input=$request->all();
        $ServUp->update($input);
        return redirect('servicio')->with('message','Se ha actualizado el registro correctamente');
    }
 
    /**
     * Remove the specified resource from storage. 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eliminar
        $Dserv = Service::findOrFail($id);
        $Dserv->delete();
        //vista
        //return "El resgistro se elimino con exito";
        return view('servicio')->with('message','Se ha eliminado correctamente la mascota');
    }
}
