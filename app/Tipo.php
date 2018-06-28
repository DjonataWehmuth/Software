<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'cad_tipos';

    protected $guarded = [];

    public function Situacao() {
		return $this->belongsTo(Situacao::class, 'status_id');
	}
}
