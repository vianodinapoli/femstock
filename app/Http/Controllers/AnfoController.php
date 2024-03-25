<?php

namespace App\Http\Controllers;
use App\Models\Anfo;
use Illuminate\Http\Request;

class AnfoController extends Controller
{
    public function index()
    {
        $anfos = Anfo::all();
        return view('anfo.index', compact('anfos'));

        
    }

    public function create()
    {
        return view('anfo.create');
    }

    public function store(Request $request)
    {
        notify()->success('Registado com sucesso');

        Anfo::create($request->all());
        return redirect()->route('anfo.index');


    }

    public function show($id)
    {
        $anfo = Anfo::findOrFail($id);
        return view('anfo.show', compact('anfo'));
    }

    public function edit($id)
    {
        $anfo = Anfo::findOrFail($id);
        return view('anfo.edit', compact('anfo'));
    }

    public function update(Request $request, $id)
    {
        notify()->success('Actualizado com sucesso');

        $anfo = Anfo::findOrFail($id);
        $anfo->update($request->all());
        return redirect()->route('anfo.index');
    }

    public function destroy($id)
    {
        notify()->success('Apagado com sucesso!');

        $anfo = Anfo::findOrFail($id);
        $anfo->delete();
        return redirect()->route('anfo.index');
    }
}
