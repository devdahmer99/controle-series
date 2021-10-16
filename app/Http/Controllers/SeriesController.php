<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()
        ->orderBy('nome')
        ->get();

        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');


    }

    public function store(SeriesFormRequest $request)
    {
        $serie = Serie::create($request->all());
        $request->session()
        ->flash(
            'mensagem',
             "Serie id {$serie->id} criada com sucesso {$serie->nome}"
            );

        return redirect()->route('listar-series');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);
        $request->session()
        ->flash(
            'mensagem',
             "Serie removida com Sucesso",
        );
        return redirect()->route('listar-series');
    }
}
