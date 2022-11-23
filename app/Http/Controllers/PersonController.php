<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;

//modelo

class PersonController extends Controller
{
   // **
    //* Display a listing of the resource.
    //*
    //* @return \Illuminate\Http\Response
    
   public function index()
   {
       //cosulta DB eloquent laravel
        $users = person::all();
        //vista
        return view('Usuario.index',compact('users'));
    }    
    
    /**
    *Muestra el formulario para crear un nuevo recurso.
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //vista de formulario
       return view('Usuario.add');
   }

   /**
    * Almacena un recurso recién creado en el almacenamiento.
    * @param  \Illuminate\Http\Request  
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
         //formulario almacenamiento de datos
         $Newuser = new Person;
         $Newuser->name= $request->input('name');  
         $Newuser->sexo= $request->input('sexo');
         $Newuser->direccion= $request->input('direccion');
         $Newuser->edad= $request->input('edad');
         $Newuser->email= $request->input('email');
         $Newuser->telefono= $request->input('telefono');
         $Newuser->password= $request->input('password');
        //guardamos datos en BD 
        $Newuser ->save();
        //vista
       return $Newuser;
        //return view('Usuario.index');
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
    $Mostraruser = person::find($id);
    return view('Usuario.show',compact('Mostraruser'));
    }

    /**
    * Muestra el formulario para editar el recurso especificado.
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    
     public function edit($id)
     {
       //editar ususario
       $EddUser = person::findOrFail($id);
       //vista
       return view('Usuario.edit',compact('EddUser'));
     }
    
     /**
    * Actualice el recurso especificado en el almacenamiento.
    *
    * @param  \Illuminate\Http\Request  
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       /* desarrollamos nuestra logica */
       $EddUser = person::findOrFail($id);
       $input=$request->all();
       $EddUser->update($input);
       return redirect('usuario')->with('mesagge','Se ha actualizado el registro correctamente');
   }
   
   /**
    *Elimina el recurso especificado del almacenamiento.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        //ELIMINAR
        $user = person::findOrFail($id);
        $user->delete();
        //return "El resgistro se elimino con exito";
        return redirect('usuario')->with('mesagge','Se ha eliminado correctamente el usuario');
 
    }
 

}
