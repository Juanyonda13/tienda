<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\TipoDocumento;
use Alert;
use HashApiTokens;
use Auth;
use Hash;


class ClienteController extends Controller
{
    //
    public function create(){

        $documentos=TipoDocumento::all();
        return view('Auth.Register',compact('documentos'));
    }
    public function registerStore(Request $request){

          $validation=Validator::make($request->all(),[
            'nombreCliente'=>'required',
            'cedula'=>'required',
            'apellidos'=>'required',
            'telefono'=>'required',
            'direccion'=>'required',
            'email'=>'required',
            'password'=>'required',
            'tipoDocumento_id'=>'required',
          ]);

          if(!$email=User::where('email','=',$request->email)->first()){
            if(!$validation->fails()){
                $cliente=new User;
                $cliente->nombreCliente=$request->nombreCliente;
                $cliente->cedula=$request->cedula;
                $cliente->apellidos=$request->apellidos;
                $cliente->telefono=$request->telefono;
                $cliente->direccion=$request->direccion;
                $cliente->email=$request->email;
                $cliente->password=Hash::make($request->password);
                $cliente->tipoDocumento_id=$request->tipoDocumento_id;
                $cliente->save();
                Alert::success('registro correcto');
                return redirect()->route('login ');
            }else{
                Alert::error('Falta un campo');
                return redirect()->route('register');

            }
          }else{
               Alert::error('el correo ya existe');
               return redirect()->route('register');

          }

    }

    public function login(){
        return view('Auth.Login');
    }

    public function loginStore(Request $request){
       if($cliente=User::where('email','=',$request->email)->first()){
            if(Hash::check($request->password,$cliente->password)){
                $credencial=[
                    'email'=>$request->email,
                    'password'=>$request->password, 
            ];
            if(Auth::attempt($credencial)){
                $token=$cliente->createToken('auth_Token')->plainTextToken;
                Alert::success('Inicio de session satisfactorio');
                return redirect()->route('Home');
            }else{
                Alert::error('algo malio sal');
                return redirect()->route('login');
            }
            }else{
                Alert::error('la contraseña es incorrecta');
                return redirect()->route('login');
            }
        }else{
            Alert::error('el Email es incorrecto');
            return redirect()->route('login');
        }
    }
    public function logout(){
        Auth::logout();
        Alert::warning('has cerrado session');
                return redirect()->route('login');
    }

    public function recibo(){
        // select venta_productos.prductos_id ,venta_productos.id ,productos.detalle_producto_id ,detalle_productos.nombreProducto
        //                               FROM users
        //                               INNER join venta_productos on venta_productos.user_id = users.id
        //                               inner join productos on productos.id = venta_productos.prductos_id
        //                               inner JOIN detalle_productos on detalle_productos.id = productos.detalle_producto_id;
        $user=Auth()->user()->id;
        $h=User::select('venta_productos.prductos_id' ,'venta_productos.id' ,'productos.detalle_producto_id' ,'detalle_productos.nombreProducto','detalle_productos.imgProducto','detalle_productos.valorUnitarioProducto','venta_productos.codigo')
                        ->join('venta_productos','venta_productos.user_id','=','users.id')
                        ->join('productos','productos.id', '=','venta_productos.prductos_id')
                        ->join('detalle_productos', 'detalle_productos.id', '=', 'productos.detalle_producto_id')
                        ->where('users.id','=',$user)->get();
        return view('venta.recibo',compact('h'));
    }

}
