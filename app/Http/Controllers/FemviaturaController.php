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
        $input = $request->all();

        if ($image = $request->file('documento')) {
            $destinationPath = 'documentos/';
            $documento = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $documento);
            $input['documento'] = $documento; // Use $documento directly
        }

        try {
            Femviatura::create($input);
            notify()->success('Viatura adicionada com sucesso');
        } catch (\Throwable $th) {
            // Log the error or display a user-friendly message
            report($th);
            return redirect()->back()->withErrors(['error' => 'Erro ao adicionar viatura']);
        }

        return redirect()->route('femviatura.index');
    }

    public function show(FemViatura $femViatura)
    {
        return view('femviaturas.show', compact('femViatura'));
    }

    public function edit($id)
    {
        $femViatura = Femviatura::findOrFail($id);

        return view('femviatura.edit', compact('femViatura'));
    }

    public function update(Request $request, Femviatura $femviatura)
    {
        notify()->success('Viatura actualizada com sucesso');
        $femviatura->update($request->all());

        return redirect()->route('femviatura.index');
    }

    public function destroy(string $id)
    {
        notify()->success('Viatura apagada com sucesso');
        $femViatura = Femviatura::findOrFail($id);
        $femViatura->delete();
        return redirect()->route('femviatura.index');
    }
}
