<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class crud extends Controller
{
    
    public function crearte(request $request){

        $producto = new producto();
        $producto->name=$request->name;
        $producto->tipo=$request->tipo;
        $producto->descripcion=$request->descripcion;
        $producto->save();


    }


    public function mostrar(){

        $producto = producto::paginate();
        
        return view('mostrar',compact('producto'));


    }



    public function editar($id){

        
        $producto =producto::find($id);
        
        return view('editar',compact('producto'));


        
    }



    public function update(request $request,producto $productos){

        $productos->name=$request->name;
        $productos->tipo=$request->tipo;
        $productos->descripcion=$request->descripcion;
        $productos->save();




    }


    public function delete(producto $productos){

        $productos->delete();
        






    }



}
