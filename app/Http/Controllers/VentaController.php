<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
{
    public function index(){
        $ventas["ventas"] = Venta::all();
        return view('admin.ver_ventas', $ventas);
    }

    public function create(){
        return view('admin.form_ventas');
    }

    public function store(){
        $datos = request()->except("_token");
        Venta::insert($datos);
        $ventas["ventas"] = Venta::all();
        return redirect()->route("admin.sellings");
    }

    public function destroy($id){
        Venta::destroy($id);
        return redirect()->route('admin.sellings');
    }

    public function edit($id){
        $venta = Venta::findOrFail($id);
        return view('admin.detalle_venta', compact('venta'));
    }

    public function update($id){
        $datos = request()->except(["_token", "_method"]);
        Venta::where('id', '=', $id)->update($datos);
        return redirect()->route("admin.sellings");
    }

    public function view($id){
        $venta = Venta::findOrFail($id);
        return view('admin.venta', compact('venta'));
    }
}
