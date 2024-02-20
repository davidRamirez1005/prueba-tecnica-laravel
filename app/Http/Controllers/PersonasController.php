<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return response()->json($personas);
    }

    public function show(Request $request, $cedula)
    {
        $persona = Persona::where('cedula', $cedula)->first(); // [{}] => null
        if (!$persona) {
            return response()->json(['error' => 'Persona no encontrada'], 404);
        }
        return response()->json($persona);
    }
}
