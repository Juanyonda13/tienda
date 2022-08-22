<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaProducto;
use App\Models\ProvedorProducto;
use App\Models\DetalleProducto;
use App\Models\Producto;
use Validator;
use Storage;
use Alert;
class ProductoController extends Controller
{
    //
    public function verProductos(){
        // SELECT detalle_productos.imgProducto,detalle_productos.nombreProducto,detalle_productos.valorUnitarioProducto 
        //                         from productos 
        //                         inner join detalle_productos on detalle_productos.id = productos.producto_id;
        if(Auth()->user()){
            $h=Producto::select('detalle_productos.imgProducto','detalle_productos.nombreProducto','detalle_productos.valorUnitarioProducto','productos.id')
            ->join('detalle_productos','detalle_productos.id','=','productos.id')
            ->get();

             return view('producto.index',compact('h'));
        }else{
            return redirect()->route('login');
        }

    }
    public function verelectrodomestico(){
        $detalle=DetalleProducto::all();
        $categoria=CategoriaProducto::all();
        $provedor=ProvedorProducto::all();
        return view('producto.create',compact('detalle','categoria','provedor'));
    }
    public function createelectrodomestico(Request $request){
        $validations=Validator::make($request->all(),[
                  'detalle_producto_id'=>'required',
                  'categoriaProdcuto_id'=>'required',
                  'provedorProducto_id'=>'required',
        ]);
        if(!$validations->fails()){
                  $producto=new Producto;
                     $producto->detalle_producto_id=$request->detalle_producto_id;
                     $producto->categoriaProdcuto_id=$request->categoriaProdcuto_id;
                     $producto->provedorProducto_id=$request->provedorProducto_id;
                     $producto->save();
                     if($producto){
                     Alert::success('producto subido a la tienda :)');
                     return redirect()->route('Home');            
                 }else{
                     Alert::error('no insertaste una imagen');
                     return redirect()->route('verelectrodomestico');
                     
                 }
 
 
        }else{
         Alert::error('Falta un campo');
         return redirect()->route('verRegisterProducto');
        }
     }



}
