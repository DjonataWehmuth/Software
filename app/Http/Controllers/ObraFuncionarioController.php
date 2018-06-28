<?php

namespace App\Http\Controllers;

use App\ObraFuncionario;
use App\Campo;
use App\Tabela;
use App\Botao;
use Validator;

use Illuminate\Http\Request;

class ObraFuncionarioController extends Controller
{
    const TABELA = 4;
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
        $tabela = Tabela::find(self::TABELA);
        $campos = Campo::where('tabela_id', self::TABELA)->orderBy('ordem', 'asc')->get();
        return view('tecnologia.novo')->with(compact('tabela','tabela', 'campos', 'campos'));
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
     * @param  \App\ObraFuncionario  $obraFuncionario
     * @return \Illuminate\Http\Response
     */
    public function show(ObraFuncionario $obraFuncionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ObraFuncionario  $obraFuncionario
     * @return \Illuminate\Http\Response
     */
    public function edit(ObraFuncionario $obraFuncionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ObraFuncionario  $obraFuncionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ObraFuncionario $obraFuncionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ObraFuncionario  $obraFuncionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(ObraFuncionario $obraFuncionario)
    {
        //
    }
}
