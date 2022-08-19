<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleProducto;
use Validator;
use Storage;
use Alert;
class DetalleProductoController extends Controller
{
    //
    public function verDetalle(){
        return view('detalle_producto.create');
    }
    public function createProducto(Request $request){
       $validations=Validator::make($request->all(),[
                 'nombreProducto'=>'required',
                 'imgProducto'=>'required',
                 'descripcionProdcuto'=>'required',
                 'valorUnitarioProducto'=>'required',
                 'iva'=>'required',
       ]);
       if(!$validations->fails()){
                 $producto=new DetalleProducto;
                 $producto->nombreProducto=$request->nombreProducto;
                 if($request->hasFile('imgProducto')){
                    $img=$request->file('imgProducto')->store('public/img');
                    $url=Storage::url($img);
                    $producto->imgProducto=$url;
                    $producto->descripcionProdcuto=$request->descripcionProdcuto;
                    $producto->valorUnitarioProducto=$request->valorUnitarioProducto;
                    $producto->iva=$request->iva;
                    $producto->save();
                    if($producto){
                    Alert::success('producto creado :)');
                    return redirect()->route('verProvedor');                
                }else{
                    Alert::error('no insertaste una imagen');
                    return redirect()->route('verRegisterProducto');
                    
                }

                }else{
                    Alert::error('Falta un campo');
                    return redirect()->route('verRegisterProducto'); 
                }

       }else{
        Alert::error('Falta un campo');
        return redirect()->route('verRegisterProducto');
       }
    }
}
