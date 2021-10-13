<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('series.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $serie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $serie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serie $serie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $serie)
    {
        //
    }
}
