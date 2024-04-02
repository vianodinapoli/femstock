<?php

namespace App\Http\Controllers;
use App\Models\Paioltwo;
use Illuminate\Http\Request;

class PaioltwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paioltwos = Paioltwo::all();
        return view('paioltwo.index', compact('paioltwos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paioltwo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        notify()->success('Material adicionado com sucesso');

        Paioltwo::create($request->all());
        return redirect()->route('paioltwo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paioltwo = Paioltwo::findOrFail($id);
        return view('paioltwo.show', compact('paioltwo'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paioltwo = Paioltwo::findOrFail($id);
        return view('paioltwo.edit', compact('paioltwo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        notify()->success('Material atualizado com sucesso');
         $paioltwo = Paioltwo::findOrFail($id);
        $paioltwo->update($request->all());
        return redirect()->route('paioltwo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        notify()->success('Material apagado com sucesso');
        $paioltwo = Paioltwo::findOrFail($id);
        $paioltwo->delete();
        return redirect()->route('paioltwo.index');
    }
}

