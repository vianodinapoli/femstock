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
        // $request->validate([
            
        //     'documento' => 'required|image|mimes:pdf,jpeg,png,jpg,gif,svg|max:20480',
        // ]);


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

    public function edit($id)
    {
        $femViatura = Femviatura::findOrFail($id);
        // ->get();
        // dd($femViatura);
        return view('femviatura.edit', compact('femViatura'));
    }

    public function update(Request $request, Femviatura $femviatura)
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
        // dd($femviatura->modelo);
 $femviatura->update($request->all());
        // $femViatura->update($validatedData);

        // if ($request->hasFile('documento')) {
        //     $femViatura->documento = $request->file('documento')->store('documentos');
        //     $femViatura->save();
        // }
        // $femviatura = femviatura::findOrFail();
        // $femviatura->update($request->all());

        // return redirect()->route ('femviatura.index');
        // return redirect()('femviatura.index', with('femViatura', $femViatura));

        // dd($request, $id);

        return "Actualizado";

    }

    public function destroy(string $id)
    {
        $Femviatura = Femviatura::findOrFail($id);
        $Femviatura->delete();
        return redirect()->route('femviatura.index');
    }
}

