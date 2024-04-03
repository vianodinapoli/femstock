<?php

namespace App\Http\Controllers;

use App\Models\Gemulex32;
use App\Models\Anfo;
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

        $quantidadeOne = DB::table('gemulex32s')
            ->where('diametro', 'like', '%32X270%')
            ->sum('quantidade');
        $gemulexes = Gemulex32::all();

        $quantidadeTwo = DB::table('gemulex32s')
            ->where('diametro', 'like', '%50X550%')
            ->sum('quantidade');
        $gemulexes = Gemulex32::all();

        $quantidadeSum = DB::table('gemulex32s')
            ->where('diametro', 'like', '%65X550%')
            ->sum('quantidade');

        $quantidadeFour = DB::table('gemulex32s')
            ->where('diametro', 'like', '%90X550%')
            ->sum('quantidade');
        $gemulexes = Gemulex32::all();

        $dadosPorLote = Gemulex32::select('numero_lote', DB::raw('sum(quantidade) as quantidade'))

            ->groupBy('numero_lote')
            ->get();

        $labels = $dadosPorLote->pluck('numero_lote');

        $quantidade = $dadosPorLote->pluck('quantidade');

        //ANFO

        $dadosPorLoteAnfo = Anfo::select('numero_lote', DB::raw('sum(quantidade) as quantidade'))
            ->groupBy('numero_lote')
            ->get();

        $labelsAnfo = $dadosPorLoteAnfo->pluck('numero_lote');
        $quantidadeAnfo = $dadosPorLoteAnfo->pluck('quantidade');

        $quantidadeAnfos = DB::table('anfos')->sum('quantidade');



        return view('home', compact('labels', 'quantidade', 'dadosPorLote', 'labelsAnfo', 'quantidadeAnfo', 'gemulexes', 'quantidadeSum', 'quantidadeAnfos', 'quantidadeOne', 'quantidadeTwo', 'quantidadeFour'));
    }
}
