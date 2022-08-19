<?php

namespace App\Http\Controllers;
use App\Models\VentaProducto;
use Illuminate\Http\Request;
use App\Models\VentaProducto;

class VentaProductoController extends Controller
{
    //
    public function recibo(Request $request){
        // select detalle_productos.nombreProducto,detalle_productos.valorUnitarioProducto,detalle_productos.descripcionProdcuto 
        //                                         FROM venta_productos 
        //                                         INNER JOIN productos on productos.producto_id = venta_productos.id 
        //                                         INNER JOIN detalle_productos on detalle_productos.id = productos.detalle_producto_id; 
 
    }
}

