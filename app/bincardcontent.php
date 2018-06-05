<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bincardcontent extends Model
{
	public function bincard()
    {
    	return $this->belongsTo(bincard::class);
    }

    public function setReferenceAttribute($value)
	{
		$this->attributes['reference'] = strtoupper($value);
	}
}
