<?php

namespace App\Http\Controllers;
use App\Models\Femviatura;
use Illuminate\Http\Request;

class FemviaturaController extends Controller
{
    public function index()
    {
        $femViaturas = FemViatura::all();
        return view('femviatura.index', compact('femViaturas'));
    }

    public function create()
    {
        return view('femviatura.create');
    }

    public function store(Request $request)
    {

        Femviatura::create($request->all());
        // $validatedData = $request->validate([
        //     'marca' => 'required|string|max:255',
        //     'modelo' => 'required|string|max:255',
        //     'cor' => 'required|string|max:255',
        //     'ano_fabricacao' => 'required|integer',
        //     'seguro' => 'required|date',
        //     'inspecao' => 'required|date',
        //     'documento' => 'required|file|mimes:pdf,docx,jpeg,png',
        // ]);

        // $femViatura = FemViatura::create($validatedData);

        // if ($request->hasFile('documento')) {
        //     $femViatura->documento = $request->file('documento')->store('documentos');
        //     $femViatura->save();
        // }

        return redirect()->route('femviatura.index');
    }

    public function show(FemViatura $femViatura)
    {
        return view('femviaturas.show', compact('femViatura'));
    }

    public function edit(FemViatura $femViatura)
    {
        return view('femviatura.edit', compact('femViatura'));
    }

    public function update(Request $request, string $id)
    {
        // $validatedData = $request->validate([
        //     'marca' => 'required|string|max:255',
        //     'modelo' => 'required|string|max:255',
        //     'cor' => 'required|string|max:255',
        //     'ano_fabricacao' => 'required|integer',
        //     'seguro' => 'required|boolean',
        //     'inspecao' => 'required|date',
        //     'documento' => 'nullable|file|mimes:pdf,docx,jpeg,png',
        // ]);

        // $femViatura->update($validatedData);

        // if ($request->hasFile('documento')) {
        //     $femViatura->documento = $request->file('documento')->store('documentos');
        //     $femViatura->save();
        // }
        $femviatura = femviatura::findOrFail($id);
        $femviatura->update($request->all());

        return redirect()->route ('femviatura.index');
        // return redirect()('femviatura.index', with('femViatura', $femViatura));

    }

    public function destroy(string $id)
    {
        $Femviatura = Femviatura::findOrFail($id);
        $Femviatura->delete();
        return redirect()->route('femviatura.index');
    }
}

