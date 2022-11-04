<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    
    public function index()
    {
        $personas=Persona::all();
        return view('home', ['personas'=>$personas]);
    }

    
    public function create()
    {
        return view('formCreate');
    }

    
    public function store(Request $request)
    {
        Persona::create($request->all());
        return redirect('/');
    }

    
    public function show(Persona $persona)
    {
        
    }

    
    public function edit(Persona $persona)
    {
        return view('formEdit', ['persona'=>$persona]);
    }

    
    public function update(Request $request, Persona $persona)
    {
        $persona->update($request->all());
        return redirect('/');
    }

    
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect('/');
    }
}
