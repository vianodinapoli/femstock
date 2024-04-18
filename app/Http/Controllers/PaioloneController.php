<?php

namespace App\Http\Controllers;

use App\Models\Paiolone;
use Illuminate\Http\Request;

class PaioloneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paiolones = Paiolone::all();
        return view('paiolone.index', compact('paiolones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paiolone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        notify()->success('Material adicionado com sucesso', 'Feito');

        Paiolone::create($request->all());
        return redirect()->route('paiolone.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paiolone = Paiolone::findOrFail($id);
        return view('paiolone.show', compact('paiolone'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paiolone = Paiolone::findOrFail($id);
        return view('paiolone.edit', compact('paiolone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        notify()->success('Material atualizado com sucesso', 'Feito');
         $paiolone = Paiolone::findOrFail($id);
        $paiolone->update($request->all());
        return redirect()->route('paiolone.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        notify()->success('Material apagado com sucesso', 'Feito');
        $paiolone = Paiolone::findOrFail($id);
        $paiolone->delete();
        return redirect()->route('paiolone.index');
    }
}

