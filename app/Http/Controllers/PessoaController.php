<?php

namespace App\Http\Controllers;

use App\Pessoa;

use App\Campo;
use App\Tabela;
use App\Botao;
use Validator;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    const TABELA = 1;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tabela = Tabela::find(self::TABELA);
      $campos = Campo::where('tabela_id', self::TABELA)->get();
      $dados  = Pessoa::all();
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
      $campos = Campo::where('tabela_id', self::TABELA)->get();
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
            'nome' => 'required|unique:cad_pessoas|max:255',
            'email' => 'required|unique:cad_pessoas|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $dados = $request->all();
        $pessoa = Pessoa::create($dados);

        return redirect()->route('consultar_pessoa', ['id' => $pessoa->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(int $pessoa)
    {
        $registro = Pessoa::find($pessoa);
        $tabela   = Tabela::find(self::TABELA);
        $campos   = Campo::where('tabela_id', self::TABELA)->get();
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
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        $dados = $request->all();
        $registro = Pessoa::find($dados['id']);

        $registro->fill($dados);

        $registro->save();

        return redirect()->route('consultar_pessoa', ['id' => $registro->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        //
    }

    public function AtualizarSituacao(Request $request)
    {
        $dados = $request->all();

        $registro = Pessoa::find($dados['id']);

        if ($dados['acao'] === 'Ativar')
            $status = 2;
        else if ($dados['acao'] === 'Editar')
            $status = 3;
        else if ($dados['acao'] === 'Cancelar')            
            $status = 5;

        $registro->status_id = $status;

        $registro->save();

        return redirect()->route('consultar_pessoa', ['id' => $registro->id]);
    }
}
