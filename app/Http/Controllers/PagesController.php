<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

$GLOBALS['listaProductos'] = array();;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function productos(){
        $productos = App\Producto::all();
        return view('productos', compact('productos'));
    }

    public function crear (Request  $request){
        
        $nuevoProducto = new App\Producto;
        $nuevoProducto->name = $request->name;
        $nuevoProducto->precio = $request->precio;

        $nuevoProducto->save();
        
        return back()->with('mensaje', 'Producto Registrado');
        
        //return $request->all();
    }

     public function consultaVentas(){
        $consultaVentas = App\Venta::all();
        return view('consultaVentas', compact('consultaVentas'));
    }

    public function nuevaVenta (Request  $request){
        $nuevaVenta = new App\Venta;
        $nuevaVenta->idCliente = $request->idCliente;
        $nuevaVenta->idTienda = $request->idTienda;
        $nuevaVenta->fecha = $request->fecha;
        $nuevoVenta->save();
        
        return back()->with('mensaje', 'venta Registrada');
    }

    public function ventas(){
        $productos = array_values($GLOBALS['listaProductos']);
        return view('ventas', compact('productos'));
    }

    public function agregarProducto(Request  $request){
        //$listaProductos = array();
        $producto = App\Producto::findOrFail($request->id);
        //array_push($GLOBALS['listaProductos'], $producto);
        //Cart::add('293ad', 'Product 1', 1, 9.99);
        return back();
    }
}