<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string|max:3',
            'nombre' => 'required|string|max:30',
            'fabricante' => 'required|string|max:30',
            'fecha_llegada' => 'required|date',
            'disponible' => 'boolean',

        ]);

        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
         $request->validate([
            'codigo' => 'required|string|max:3',
            'nombre' => 'required|string|max:30',
            'fabricante' => 'required|string|max:30',
            'fecha_llegada' => 'required|date',
            'disponible' => 'boolean',

        ]);

        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
