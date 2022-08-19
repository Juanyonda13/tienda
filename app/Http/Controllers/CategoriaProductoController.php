<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaProducto;
use Alert; 

class CategoriaProductoController extends Controller
{
    //
    public function vercategoria(){
        return view('categoria.create');
    }
    public function createCategoria(Request $request){

                 $producto=new CategoriaProducto;
                 $producto->nombreCategoria=$request->nombreCategoria;
                 $producto->save();
                    if($producto){
                    Alert::success('categoria creada :)');
                    return redirect()->route('verelectrodomestico');                
                }else{
                    Alert::error('no insertaste una imagen');
                    return redirect()->route('verProvedor');
                    
                }

    }
}
