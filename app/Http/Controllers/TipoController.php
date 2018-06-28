<?php

namespace App\Http\Controllers;

use App\Tipo;

use App\Campo;
use App\Tabela;
use App\Botao;

use Validator;

use Illuminate\Http\Request;

class TipoController extends Controller
{
    const TABELA = 3;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabela = Tabela::find(self::TABELA);
        $campos = Campo::where('tabela_id', self::TABELA)->orderBy('ordem', 'asc')->get();
        $dados  = Tipo::all();
        return view('tecnologia.index')->with(compact('tabela','tabela', 'campos', 'campos', 'dados', 'dados'));
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
        $validator = Validator::make($request->all(), [
            'nome' => 'required|unique:cad_tipos|max:255',
            'tabela_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $dados = $request->all();
        $tipo = Tipo::create($dados);

        return redirect()->route('consultar_tipo', ['id' => $tipo->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(int $tipo)
    {
        $registro = Tipo::find($tipo);
        $tabela   = Tabela::find(self::TABELA);
        $campos   = Campo::where('tabela_id', self::TABELA)->orderBy('ordem', 'asc')->get();
        $botoes   = Botao::where('tabela_id', self::TABELA)->get();

        if (in_array($registro->status_id, [2, 5]))
            $somenteleitura = 'disabled';
        else
            $somenteleitura = '';
        
        return view('tecnologia.consulta')->with(compact('tabela','tabela', 'campos', 'campos','botoes','botoes','registro','registro', 'somenteleitura', 'somenteleitura'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo $tipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo $tipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo $tipo)
    {
        //
    }
}
