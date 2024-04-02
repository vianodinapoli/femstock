<?php

namespace App\Http\Controllers;
use App\Models\Paiolthree;
use Illuminate\Http\Request;

class PaiolthreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paiolthrees = Paiolthree::all();
        return view('paiolthree.index', compact('paiolthrees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paiolthree.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        notify()->success('Material adicionado com sucesso');

        Paiolthree::create($request->all());
        return redirect()->route('paiolthree.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paiolthree = Paiolthree::findOrFail($id);
        return view('paiolthree.show', compact('paiolthree'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paiolthree = Paiolthree::findOrFail($id);
        return view('paiolthree.edit', compact('paiolthree'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        notify()->success('Material atualizado com sucesso');
         $paiolthree = Paiolthree::findOrFail($id);
        $paiolthree->update($request->all());
        return redirect()->route('paiolthree.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        notify()->success('Material apagado com sucesso');
        $paiolthree = Paiolthree::findOrFail($id);
        $paiolthree->delete();
        return redirect()->route('paiolthree.index');
    }
}

