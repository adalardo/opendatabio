<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Log;

class Object extends Model
{
	protected $primaryKey = 'object_id';
	protected $fillable = ['note', 'bib_reference_id']; // TODO: which slots should be mass-assignable?
	public function content() {
		Log::info("WAAAA");
		return $this->morphTo(null, null, 'object_id');
	}
	public function bib_reference() {
		return $this->belongsTo('App\BibReference');
	}

    //
}
