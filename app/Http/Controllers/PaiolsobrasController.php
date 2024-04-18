<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Paiolsobras;
use Illuminate\Http\Request;

class PaiolsobrasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {





        $paiolsobras = Paiolsobras::all();
        return view('paiolsobras.index', compact('paiolsobras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paiolsobras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        notify()->success('Material adicionado com sucesso', 'Feito');

        Paiolsobras::create($request->all());
        return redirect()->route('paiolsobras.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paiolsobras = Paiolsobras::findOrFail($id);
        return view('paiolsobras.show', compact('paiolsobras'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paiolsobras = Paiolsobras::findOrFail($id);
        return view('paiolsobras.edit', compact('paiolsobras'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        notify()->success('Material atualizado com sucesso', 'Feito');
        $paiolsobras = Paiolsobras::findOrFail($id);
        $paiolsobras->update($request->all());
        return redirect()->route('paiolsobras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        notify()->success('Material apagado com sucesso', 'Feito');
        $paiolsobras = Paiolsobras::findOrFail($id);
        $paiolsobras->delete();
        return redirect()->route('paiolsobras.index');
    }
}
