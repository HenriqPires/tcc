<?php

namespace App\Http\Controllers;

use App\Models\Entregador;
use Illuminate\Http\Request;

class EntregadorController extends Controller
{
    public function index()
    {
        $entregadores = Entregador::all();
        return view('entregadores.index', compact('entregadores'));
    }

    public function create()
    {
        return view('entregadores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required|email|unique:entregadores',
        ]);

        Entregador::create($request->all());

        return redirect()->route('entregadores.index')
                         ->with('success', 'Entregador criado com sucesso.');
    }

    public function show(Entregador $entregador)
    {
        return view('entregadores.show', compact('entregador'));
    }

    public function edit(Entregador $entregador)
    {
        return view('entregadores.edit', compact('entregador'));
    }

    public function update(Request $request, Entregador $entregador)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required|email|unique:entregadores,email,' . $entregador->id,
        ]);

        $entregador->update($request->all());

        return redirect()->route('entregadores.index')
                         ->with('success', 'Entregador atualizado com sucesso.');
    }

    public function destroy(Entregador $entregador)
    {
        $entregador->delete();

        return redirect()->route('entregadores.index')
                         ->with('success', 'Entregador excluído com sucesso.');
    }
}
