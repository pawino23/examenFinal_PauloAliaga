<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'direccion' => 'required|string|max:255',
            'fono' => ['required', 'string', 'size:9', 'regex:/^\d{9}$/'],
        ]);

        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente creado con éxito.');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $id,
            'direccion' => 'required|string|max:255',
            'fono' => ['required', 'string', 'size:9', 'regex:/^\d{9}$/'],
        ]);

        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado con éxito.');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado con éxito.');
    }
}
