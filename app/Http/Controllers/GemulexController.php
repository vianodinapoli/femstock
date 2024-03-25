<?php

namespace App\Http\Controllers;

use App\Models\Gemulex32;
use Illuminate\Http\Request;

class GemulexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gemulexes = Gemulex32::all();
        return view('gemulex.index', compact('gemulexes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gemulex.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        notify()->success('Gemulex adicionado com sucesso');

        Gemulex32::create($request->all());
        return redirect()->route('gemulex.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gemulex = Gemulex32::findOrFail($id);
        return view('gemulex.show', compact('gemulex'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gemulex = Gemulex32::findOrFail($id);
        return view('gemulex.edit', compact('gemulex'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        notify()->success('Gemulex atualizado com sucesso');
         $gemulex = Gemulex32::findOrFail($id);
        $gemulex->update($request->all());
        return redirect()->route('gemulex.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        notify()->success('Gemulex apagado com sucesso');
        $gemulex = Gemulex32::findOrFail($id);
        $gemulex->delete();
        return redirect()->route('gemulex.index');
    }
}

