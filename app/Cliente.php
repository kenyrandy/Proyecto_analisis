<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $guarded = [];
    public function contratos(){
    	return $this->hasMany(Contratos::class);
    }
}
