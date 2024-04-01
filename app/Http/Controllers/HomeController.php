<?php

namespace App\Http\Controllers;
use App\Models\Gemulex32;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $gemulex32s = DB::table('gemulex32s')->count();

        // $lotes = Gemulex32::select('numero_lote', DB::raw('count(*) as quantidade'))
        // ->groupBy('numero_lote')
        // ->get();

        // return view('home', compact('gemulex32s', 'lotes'));


        $dadosPorLote = Gemulex32::select('numero_lote', DB::raw('sum(quantidade) as quantidade'))
        
        ->groupBy('numero_lote')
        ->get();

    $labels = $dadosPorLote->pluck('numero_lote');
    
    $quantidade = $dadosPorLote->pluck('quantidade');

    

    return view('home', compact('labels', 'quantidade', 'dadosPorLote'));


    }
}
