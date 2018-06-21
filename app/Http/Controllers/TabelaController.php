<?php

namespace App\Http\Controllers;

use App\Tabela;
use Illuminate\Http\Request;
use DB;

class TabelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Get a tabela resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function complementar(string $tabela)
    {
        $registros = DB::table($tabela)->select('id', 'nome')->get();

        return response()->json($registros);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tabela  $tabela
     * @return \Illuminate\Http\Response
     */
    public function show(Tabela $tabela)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tabela  $tabela
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabela $tabela)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tabela  $tabela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabela $tabela)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tabela  $tabela
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabela $tabela)
    {
        //
    }
}
