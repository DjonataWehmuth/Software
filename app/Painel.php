<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Painel extends Model
{
    protected $table = 'bi_painel';

    protected $guarded = [];

    public function Situacao() {
		return $this->belongsTo(Situacao::class, 'status_id');
	}
}
