<?php

namespace App\Http\Controllers;

use App\Models\checking;
use Illuminate\Http\Request;

class CheckingController extends Controller
{
    public function index()
    {
        //cosulta DB eloquent laravel
       $citas = checking::all('fecha','total');
       //vista
       return view('Citas.index',compact('citas'));
     }    
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //vista de formulario
       return view('Citas.add');
       
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
        $Newcita = new checking;
        $Newcita ->fecha =$request->input('fecha'); 
        $Newcita ->entrada =$request->input('entrada');
        $Newcita ->salida =$request->input('salida');
        $Newcita ->total =$request->input('total');
        //guardamos datos en BD 
        $Newcita ->save();
          //guardamos datos en BD 
          return redirect('checking')->with('message','Se ha creado correctamente la cita');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //mostrar recurso 
    $Mostrarcita = checking::find($id);
    return view('Citas.show',compact('Mostrarcita'));
       }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          //editar ususario
       $EddCita = checking::findOrFail($id);
       //vista
       return view('Citas.edit',compact('EddCita'));
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
       $EddCita = checking::findOrFail($id);
       $input=$request->all();
       $EddCita->update($input);
       return redirect('checking')->with('messagedit','Se ha actualizado la cita correctamente');
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
        $cita = checking::findOrFail($id);
        $cita->delete();
        //return "El resgistro se elimino con exito";
        return redirect('checking')->with('eliminacion','Se ha eliminado correctamente el usuario');
    }
 
}
