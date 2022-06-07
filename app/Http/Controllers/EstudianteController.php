<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiante.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:5',
            'apellido' => 'required|min:5',
        ]);

        Estudiante::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'grado' => $request->grado,
            'seccion' => $request->seccion,
            'curso' => $request->curso,
        ]);

        return redirect()->route('estudiantes.index');
    }

    public function show(Estudiante $estudiante)
    {
        return view('estudiante.show', compact('estudiante'));
    }

    public function edit(Estudiante $estudiante)
    {
        return view('estudiante.edit', compact('estudiante'));
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'nombre' => 'required|min:5',
            'apellido' => 'required|min:5',
        ]);

        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index');
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiantes.index');
    }
}
