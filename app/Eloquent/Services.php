<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = "services";

	protected $fillable = [
			'name', 'description','promocion','price','estado'
	];

	//Scope

	public function scopeState($query, $state){
		if($state && $state!=="Todo")
			return $query->where('estado',$state);
	}
}
