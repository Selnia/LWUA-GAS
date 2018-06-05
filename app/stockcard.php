<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stockcard extends Model
{
	public function bincard()
    {
    	return $this->hasOne(bincard::class, 'stock_number', 'stock_number', 'id');
    }
    
	public function stockcardcontent()
    {
    	return $this->hasMany(stockcardcontent::class, 'stockcard_id');
    }

    public function setStockNumberAttribute($value)
	{
		$this->attributes['stock_number'] = strtoupper($value);
	}

	public function setCardNumberAttribute($value)
	{
		$this->attributes['card_number'] = strtoupper($value);
	}
}
