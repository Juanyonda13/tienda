<?php

namespace App\Http\Controllers;
use App\Models\VentaProducto;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\ProductoController;
use Alert;
use Auth;

class VentaProductoController extends Controller
{
    //
    public function venta($id){
        $producto=Producto::find($id);
        $h=Producto::select('detalle_productos.imgProducto','detalle_productos.nombreProducto','detalle_productos.valorUnitarioProducto','provedor_productos.nombreProvedor','productos.id')
        ->join('detalle_productos','detalle_productos.id','=','productos.id')
        ->join('provedor_productos','provedor_productos.id','=','productos.id')
        ->where('productos.id','=',$producto->id)
        ->get();
        return view('venta.index',compact('h'));
    }
    public function compra(Request $request){
        $venta=new VentaProducto;
        $venta->codigo=rand();
        $venta->prductos_id=$request->id;
        $venta->user_id=Auth()->user()->id;
        $venta->save();
        Alert::success('compraste el producto');
        return redirect()->route('Home');
        
    }
    
}

