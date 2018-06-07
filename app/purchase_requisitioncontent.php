<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase_requisitioncontent extends Model
{
    public function stockcard()
    {
    	return $this->hasOne(stockcard::class, 'stock_number', 'stock_number', 'id');
    }
}
