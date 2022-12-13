<?php

 namespace App\Http\Controllers\Api;

 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use App\Models\checking;

 class CheckingController extends Controller
 {
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
    public function index()
     {
         ////consulta eloquent laravel 
         $citas = checking::all();
         //   //return $users;
            return response()->json(['citaApi'=>$citas],200);
     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
 public function store(Request $request)
     {
         $input=request()->all();
        checking::create($input);
         //vista mensaje 
         return ('la cita se dio de alta con exito ');
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
         $Mostrarcita =checking::find($id);
       return Response()->json($Mostrarcita,200);
   }

   /**
    * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
     public function update(Request $request, $id)
     {
         $EddCita = checking::findOrFail($id);       $input=$request->all();
         $EddCita->update($input);
         return ('la cita se actualizo con exito');
     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
     public function destroy($id)
     {
           //ELIMINAR
        $cita = checking::findOrFail($id);
        $cita->delete();
        //vista mensaje
        return ('la cita se elimino de manera correcta');
     }
 }
