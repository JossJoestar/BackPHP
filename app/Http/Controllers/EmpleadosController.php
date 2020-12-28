<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    //
    public function index()
    {
        return Empleados::all();
        // return response()->json('Hello World', 200);
    }
    public function show($id)
    {
        return Empleados::find($id);
    }
    public function store(Request $request)
    {
        $empleado = Empleados::create($request->all());
        return response()->json($empleado, 201);
    }
    public function update(Request $request, Empleados $empleado)
    {
        $empleado->update($request->all());
        return response()->json($empleado, 200);
    }
    public function destroy($id)
    {
        $empleado = Empleados::find($id)->delete($id);
        return response()->json($id, 200);
    }
}
