<?php

namespace App\Http\Controllers;
use App\Models\Estoque;

use Illuminate\Http\Request;
class EstoqueController extends Controller
{
    public function index()
    {
        $estoques = Estoque::all();
        return view('estoque.index', compact('estoques'));
    }

    public function create()
    {
        return view('estoque.create');
    }

    public function store(Request $request)
    {
        
        $estoque = Estoque::create($request->all());
        return redirect()->route('estoque.index');
    }

    public function show(Estoque $estoque)
    {
        return view('estoque.show', compact('estoque'));
    }

    public function edit(Estoque $estoque)
    {
        return view('estoque.edit', compact('estoque'));
    }

    public function update(Request $request, Estoque $estoque)
    {
        $estoque->update($request->all());
        return redirect()->route('estoque.index');
    }

    public function destroy(Estoque $estoque)
    {
        $estoque->delete();
        return redirect()->route('estoque.index');
    }
}
