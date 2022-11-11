<?php

namespace App\Http\Controllers;

use App\Models\person;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

//modelo

class PersonController extends Controller
{
   // **
    //* Display a listing of the resource.
    //*
    //* @return \Illuminate\Http\Response
    
   public function index()
   {
       //cosulta eloquent laravel
        $users = person::all();
        //return $users;
        return view('Usuario.index',compact('users'));
    }    

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //
       return view('Usuario.add');
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
      $AddPerson = new Person;
      $AddPerson->name= $request->input('name');  
      $AddPerson->sexo= $request->input('sexo');
      $AddPerson->direccion= $request->input('direccion');
      $AddPerson->edad= $request->input('edad');
      $AddPerson->email= $request->input('email');
      $AddPerson->telefono= $request->input('telefono');
      $AddPerson->password= $request->input('password');
      //guardar datos 
      $AddPerson ->save();
      //tester
     //return $AddPerson;
     //vista
     return redirect('usuario.index')->with('mesagge', 'has creado un usuario exitosamente ');
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
       $Mostraruser = person::find($id);
      // return  $Mostraruser;
      return view('Usuario.show',compact('Mostraruser'));
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
       $EddUser = person::findOrFail($id);
       //vista
       return view('Usuario.edit',compact('EddUser'));
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
       $EddUser = person::findOrFail($id);
       $input=$request->all();
       $EddUser->update($input);
       return redirect('usuario')->with('mesagge','Se ha actualizado el registro correctamente');
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
       //return "El resgistro se elimino con exito";
       return redirect('usuario')->with('mesagge','Se ha eliminado correctamente el usuario');

   }


}
