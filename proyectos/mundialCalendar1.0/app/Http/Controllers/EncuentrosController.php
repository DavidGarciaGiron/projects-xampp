<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encuentros;

class EncuentrosController extends Controller
{
    public function index()
    {
        //
        $encuentros=Encuentros::orderBy('id','ASC')->paginate(10);
        return view('Encuentro.index',compact('encuentros')); 
    }
    public function create()
    {
        //
        return view('Encuentro.create');
    }
    public function store(Request $request)
    {
        //
        $this->validate($request,[ 'pais1' =>'required',
                                    'pais2' =>'required',
                                    'estadio' =>'required',
                                    'grupo' =>'required',
                                    'fecha' =>'required',
                                     'hora' =>'required']);
        Encuentros::create($request->all());
        return redirect()->route('encuentro.index')->with('success','Registro creado satisfactoriamente');
    }
    public function show($id)
    {
        $calendarios=Encuentros::all();
        return view('Encuentro.calendario',compact('calendarios'));
        $encuentros=Encuentros::find($id);
      return view('Encuentro.show', compact('encuentros'));
    }
    public function edit($id)
    {
        $encuentro=Encuentros::find($id);
     return view('Encuentro.edit', compact('encuentro'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[ 'pais1'=>'required', 
                                    'pais2'=>'required', 
                                    'estadio'=>'required',
                                     'grupo'=>'required', 
                                     'fecha'=>'required', 
                                     'hora'=>'required']);
        Encuentros::find($id)->update($request->all());
       return redirect()->route('encuentro.index')->with('success','Registro actualizado satisfactoriamente');
    
    }
    public function destroy($id)
    {
        Encuentros::find($id)->delete();
      return redirect()->route('encuentro.index')->with('success','Registro eliminado satisfactoriamente');
    }

}
