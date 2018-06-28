<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcao extends Model
{
    protected $table = 'cad_funcao';

    protected $guarded = [];

    public function Situacao() {
		return $this->belongsTo(Situacao::class, 'status_id');
	}
}
