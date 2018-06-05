<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bincard extends Model
{
	public function stockcard()
    {
    	return $this->hasOne(stockcard::class, 'stock_number', 'stock_number', 'id');
    }

	public function bincardcontent()
    {
    	return $this->hasMany(bincardcontent::class, 'bincard_id');
    }

	public function setStockNumberAttribute($value)
	{
		$this->attributes['stock_number'] = strtoupper($value);
	}
}
