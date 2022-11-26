<?php
namespace App\Http\Controllers;

use App\Models\person;
use App\Models\pet;
use Illuminate\Http\Request;

class PetController extends Controller
{//
    public function index()
    {
        //consulta base de datos 
        $pets = pet::all() ;
       // return $pets;
    return view('Mascota.index',compact('pets') ) ;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = person::all('id','name');
        return view('Mascota.add', compact('users'));
        
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
      $pet->people_id= $request->input('people_id');
      $pet ->save();
     //vista
      return redirect('mascota')->with('message','Se ha registrado exitosamnete la Mascota');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //vista de mascota 
        $mascot = Pet::find($id);
        return view('Mascota.show',compact('mascot'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //editar mascota
        $Eddpet = Pet::findOrFail($id);
        //vista
        return view('Mascota.edit',compact('Eddpet'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          /* desarrollamos nuestra logica */
       $Eddpet = Pet::findOrFail($id);
       $input=$request->all();
       $Eddpet->update($input);
       return redirect('mascota')->with('messagedit','Se ha actualizado la informacion de la mascota Exitosamente');
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
        //vista mensaje
        return redirect('mascota')->with('eliminacion','Se ha eliminado correctamente la mascota');
    }
}

