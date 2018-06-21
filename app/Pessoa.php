<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Pessoa extends Model
{
    protected $table = 'cad_pessoas';

    protected $fillable = [
        'nome',
        'inscricao',
        'documento',
        'telefone',
        'celular',
        'observacao',
        'email',
        'sexo_id',
        'abrangencia_id',
    ];

    public function Situacao() {
		return $this->belongsTo(Situacao::class, 'status_id');
	}
}
