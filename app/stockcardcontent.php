<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stockcardcontent extends Model
{
	public function stockcard()
    {
    	return $this->belongsTo(stockcard::class);
    }

    public function setReferenceAttribute($value)
	{
		$this->attributes['reference'] = strtoupper($value);
	}
}
