<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }
    public function fotos(){
        return view('fotos');
    }
    public function blog(){
        return view('blog');
    }
    public function nosotros($nombre = null){
        $equipo = ['David', 'Piero', 'Arian'];

        //return view('nosotros',['equipo'=>$equipo, 'nombre'=>$nombre]);
        return view('nosotros', compact('equipo','nombre'));
    }
    public function notas(){
        $notas = App\Nota::paginate(3);
        return view('notas', compact('notas'));
    }
    public function detalle($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.detalle', compact('nota'));
    }
    public function crear(Request $request){
        //return $request->all();

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'created_at' => 'required'
        ]);

        $notaNueva = new App\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;
        $notaNueva->created_at = $request->created_at;

        $notaNueva->save();

        return back()->with('mensaje', 'Nota Agregada!');
    }
    public function editar($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));
    }
    public function update(Request $request, $id){

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'created_at' => 'required'
        ]);

        $notaUpdate = App\Nota::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;
        $notaUpdate->created_at = $request->created_at;

        $notaUpdate->save();

        return back()->with('mensaje', 'Nota Actualizada!');
    }
    public function eliminar($id){
        $notaEliminar = App\Nota::findOrFail($id);
        $notaEliminar->delete();
        return back()->with('mensaje', 'Nota Eliminada!');
    }

}
