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


        notify()->success('Viatura adicionada com sucesso');

        $input = $request->all();

        if ($image = $request->file('documento')) {
            $destinationPath = 'documentos/';
            $documento = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $documento);
            $input['documento'] = "$documento";
        }

        //    try {

        //     //code...
        //    } catch (\Throwable $th) {


        //     //throw $th;
        //    }
        Femviatura::create($input);


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


    }

    public function destroy(string $id)
    {
        notify()->success('Viatura apagada com com sucesso');


        $Femviatura = Femviatura::findOrFail($id);
        $Femviatura->delete();
        return redirect()->route('femviatura.index');
    }
}
