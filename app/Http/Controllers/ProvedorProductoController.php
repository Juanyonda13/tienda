<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleProducto;
use App\Models\ProvedorProducto;
use validator;
use Alert;
class ProvedorProductoController extends Controller
{
    //
    public function verprovedor(){
        return view('proveedor.create');
    }
    public function createProvedor(Request $request){

                 $producto=new ProvedorProducto;
                 $producto->nombreProvedor=$request->nombreProvedor;
                    $producto->save();
                    if($producto){
                    Alert::success('provedor guradado :)');
                    return redirect()->route('verCategoria');                
                }else{
                    Alert::error('no insertaste una imagen');
                    return redirect()->route('verProvedor');
                    
                }

    }
}
