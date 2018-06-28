<?php

namespace App\Http\Controllers;

use App\Obra;
use App\Campo;
use App\Tabela;
use App\Botao;
use Validator;

use Illuminate\Http\Request;

class ObraController extends Controller
{
    const TABELA = 2;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabela = Tabela::find(self::TABELA);
        $campos = Campo::where('tabela_id', self::TABELA)->orderBy('ordem', 'asc')->get();
        $dados  = Obra::all();
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
            'nome' => 'required',
            'pessoa_id' => 'required',
            'tipo_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $dados = $request->all();
        $obra = Obra::create($dados);

        return redirect()->route('consultar_obra', ['id' => $obra->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function show(int $obra)
    {
        $registro = Obra::find($obra);
        $tabela   = Tabela::find(self::TABELA);
        $campos   = Campo::where('tabela_id', self::TABELA)->orderBy('ordem', 'asc')->get();
        $botoes   = Botao::where('tabela_id', self::TABELA)->get();

        if (in_array($registro->status_id, [6, 7,8]))
            $somenteleitura = 'disabled';
        else
            $somenteleitura = '';
        
        return view('tecnologia.consulta')->with(compact('tabela','tabela', 'campos', 'campos','botoes','botoes','registro','registro', 'somenteleitura', 'somenteleitura'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function edit(Obra $obra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obra $obra)
    {
        $dados = $request->all();
        $registro = Obra::find($dados['id']);

        $registro->fill($dados);

        $registro->save();

        return redirect()->route('consultar_obra', ['id' => $registro->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obra $obra)
    {
        //
    }

    public function AtualizarSituacao(Request $request)
    {
        $dados = $request->all();

        $registro = Obra::find($dados['id']);

        if ($dados['acao'] === 'Ativar')
            $status = 6;
        else if ($dados['acao'] === 'Editar')
            $status = 3;
        else if ($dados['acao'] === 'Cancelar')            
            $status = 5;
        else if ($dados['acao'] === 'Executar')            
            $status = 7;
        else if ($dados['acao'] === 'Finalizar')            
            $status = 8;

        $registro->status_id = $status;

        $registro->save();

        return redirect()->route('consultar_obra', ['id' => $registro->id]);
    }
}
