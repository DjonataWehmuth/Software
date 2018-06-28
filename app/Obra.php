<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $table = 'obr_cadastro';

    protected $guarded = [];

    public function Situacao() {
		return $this->belongsTo(Situacao::class, 'status_id');
	}
}
