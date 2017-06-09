<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	protected $primaryKey = 'object_id';
	protected $fillable = ['name']; // TODO: which slots should be mass-assignable?
	public function object() {
		return $this->morphOne('App\Object', 'object');
	}
}
