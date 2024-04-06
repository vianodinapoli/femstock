<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Gemulex32;
use App\Models\Anfo;
use App\Models\Paiolsobras;
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


        // Lots by count
        $dadosPorLote = Gemulex32::select('numero_lote', DB::raw('sum(quantidade) as quantidade'))
            ->groupBy('numero_lote')
            ->get();

        $labels = $dadosPorLote->pluck('numero_lote');
        $quantidade = $dadosPorLote->pluck('quantidade');

        // ANFO
        $dadosPorLoteAnfo = Anfo::select('numero_lote', DB::raw('sum(quantidade) as quantidade'))
            ->groupBy('numero_lote')
            ->get();

        $labelsAnfo = $dadosPorLoteAnfo->pluck('numero_lote');
        $quantidadeAnfo = $dadosPorLoteAnfo->pluck('quantidade');

        $quantidadeAnfos = DB::table('anfos')->sum('quantidade');

        // Acessorios (assuming grouping by descricao)
        $dadosPorLoteAcessorios = Paiolsobras::select('descricao', DB::raw('sum(quantidade) as quantidade'))
            ->groupBy('descricao')
            ->get();

        $labelsSobras = $dadosPorLoteAcessorios->pluck('descricao');
        $quantidadeSobras = $dadosPorLoteAcessorios->pluck('quantidade');

        // Specific Gemulex32 counts (optimized)
        $quantidadeOne = DB::table('gemulex32s')
            ->where('diametro', 'like', '%32X270%')
            ->sum('quantidade');

        $quantidadeTwo = DB::table('gemulex32s')
            ->where('diametro', 'like', '%50X550%')
            ->sum('quantidade');

        $quantidadeSum = DB::table('gemulex32s')
            ->where('diametro', 'like', '%65X550%')
            ->sum('quantidade');

        $quantidadeFour = DB::table('gemulex32s')
            ->where('diametro', 'like', '%90X550%')
            ->sum('quantidade');

        $gemulexes = Gemulex32::all(); // Get all gemulex32s (potentially for display) 

        return view('home', compact('labels', 'quantidade', 'dadosPorLoteAcessorios', 'dadosPorLote', 'labelsAnfo', 'quantidadeAnfo', 'gemulexes', 'quantidadeSum', 'quantidadeAnfos', 'quantidadeOne', 'quantidadeTwo', 'quantidadeFour', 'labelsSobras', 'quantidadeSobras'));
    }
}
