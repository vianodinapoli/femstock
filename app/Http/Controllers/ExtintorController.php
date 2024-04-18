<?php

    namespace App\Http\Controllers;

use App\Models\Extintor;
use App\Models\Femviatura;
    use Illuminate\Http\Request;
    
    class ExtintorController extends Controller
    {
        public function index()
        {
            $extintores = Extintor::all();
            return view('extintor.index', compact('extintores'));
        }
    
        public function create()
        {
            return view('extintor.create');
        }
    
        public function store(Request $request)
        {
            
                notify()->success('Extintor adicionado com sucesso', 'Feito');
                Extintor::create($request->all());

    
            return redirect()->route('extintor.index');
        }
    
        public function show(Extintor $extintor)
        {
            return view('extintor.show', compact('extintor'));
        }
    
        public function edit($id)
        {
            $extintor = Extintor::findOrFail($id);
    
            return view('extintor.edit', compact('extintor'));
        }
    
        public function update(Request $request, Extintor $extintor)
        {
            notify()->success('Extintor actualizado com sucesso', 'Feito');
            $extintor->update($request->all());
    
            return redirect()->route('extintor.index');
        }
    
        public function destroy(string $id)
        {
            notify()->success('Extintor apagado com sucesso', 'Feito');
            $extintor = Extintor::findOrFail($id);
            $extintor->delete();
            return redirect()->route('extintor.index');
        }
    }
    
