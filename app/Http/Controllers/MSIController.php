<?php

namespace App\Http\Controllers;

use Request;
use Response;
use Carbon\Carbon;
use App\bincard;
use App\bincardcontent;
use App\stockcard;
use App\stockcardcontent;

class MSIController extends Controller
{
	public function bincard()
	{
		$items = bincard::all();
		return view('msi.bincard', compact('items'));
	}

	public function addbincard()
	{
		if(Request::ajax())
		{
			$bincard = new bincard;
			$bincard->stock_number = Request::get('stock_number');
			$bincard->unit = Request::get('unit');
			$bincard->reorder_point = Request::get('reorder_point');
			$bincard->reorder_quantity = Request::get('reorder_quantity');
			$bincard->location = Request::get('location');
			$bincard->item = Request::get('item');
			$bincard->save();

			return Response::json(['bincard' => $bincard]);
		}
	}

	public function addbincardcontent()
	{
		if(Request::ajax())
		{
			$validation = null;
			$bincardcontent = new bincardcontent;
			$lastrow = bincardcontent::where('bincard_id', Request::get('bincard_id'))->orderBy('created_at', 'desc')->first();

			if(empty($lastrow) && Request::get('options') == 'Issued')
			{
				$validation = 'empty';
			}
			else if(!empty($lastrow) && $lastrow->available < Request::get('quantity') && Request::get('options') == 'Issued')
			{
				$validation = 'insufficient';
			}
			else
			{
				$bincardcontent->bincard_id = Request::get('bincard_id');
				$bincardcontent->reference = Request::get('reference');

				if(empty($lastrow))
				{
					$bincardcontent->received = Request::get('quantity');
					$bincardcontent->balance_on_hand =	Request::get('quantity');
					$bincardcontent->available = Request::get('quantity');
				}
				else
				{
					if(Request::get('options') == 'Received')
					{
						$received = $lastrow->available + Request::get('quantity');
						$bincardcontent->received = Request::get('quantity');
						$bincardcontent->balance_on_hand = $received;
						$bincardcontent->available = $received;
					}
					else if(Request::get('options') == 'Issued')
					{
						$issued = $lastrow->available - Request::get('quantity');
						$bincardcontent->issued = Request::get('quantity');
						$bincardcontent->balance_on_hand = $issued;
						$bincardcontent->available = $issued;		
					}
				}

				$bincardcontent->save();
			}	

			return Response::json(['validation' => $validation]);
		}
	}

	public function viewbincard($id)
	{
		$bincard = bincard::find($id);
		$items = bincardcontent::where('bincard_id', $id)->get();
		return view('msi.reports.view-bincard', ['bincard' => $bincard, 'items' => $items	]);
	}

	public function stockcard()
	{
		$items = stockcard::all();
		return view('msi.stockcard', compact('items'));
	}

	public function addstockcard()
	{
		if(Request::ajax())
		{
			$stockcard = new stockcard;
			$stockcard->card_number = Request::get('card_number');
			$stockcard->stock_number = Request::get('stock_number');
			$stockcard->article = Request::get('article');
			$stockcard->unit = Request::get('unit');
			$stockcard->location = Request::get('location');
			$stockcard->reorder_point = Request::get('reorder_point');
			$stockcard->reorder_quantity = Request::get('reorder_quantity');
			$stockcard->description = Request::get('description');
			$stockcard->save();

			return Response::json(['stockcard' => $stockcard]);
		}
	}

	public function addstockcardcontent()
	{
		if(Request::ajax())
		{
			$validation = null;
			$balance_quantity = $balance_unit_cost = $balance_amount = 0;
			$stockcardcontent = new stockcardcontent;
			$lastrow = stockcardcontent::where('stockcard_id', Request::get('stockcard_id'))->orderBy('created_at', 'desc')->first();

			if(empty($lastrow) && Request::get('options') == 'Issued')
			{
				$validation = 'empty';
			}
			else if(!empty($lastrow) && $lastrow->balance_quantity < Request::get('quantity') && Request::get('options') == 'Issued')
			{
				$validation = 'insufficient';
			}
			else
			{
				$stockcardcontent->stockcard_id = Request::get('stockcard_id');
				$stockcardcontent->reference = Request::get('reference');

				if(empty($lastrow))
				{
					$stockcardcontent->received_quantity = Request::get('quantity');
					$stockcardcontent->received_unit_cost = Request::get('unit_cost');
					$stockcardcontent->received_amount = Request::get('quantity') * Request::get('unit_cost');
					$balance_quantity = Request::get('quantity');
					$balance_unit_cost = Request::get('unit_cost');
					$balance_amount = Request::get('quantity') * Request::get('unit_cost');
				}
				else
				{
					if(Request::get('options') == 'Received')
					{
						$received_amount = Request::get('quantity') * Request::get('unit_cost');
						$stockcardcontent->received_quantity = Request::get('quantity');
						$stockcardcontent->received_unit_cost = Request::get('unit_cost');
						$stockcardcontent->received_amount = $received_amount;
						$balance_quantity = $lastrow->balance_quantity + Request::get('quantity');
						$balance_amount = $lastrow->balance_amount + $received_amount;
						$balance_unit_cost = $balance_amount / $balance_quantity;
					}
					else if(Request::get('options') == 'Issued')
					{
						$issued_amount = Request::get('quantity') * $lastrow->balance_unit_cost;
						$stockcardcontent->issued_quantity = Request::get('quantity');
						$stockcardcontent->issued_unit_cost = $lastrow->balance_unit_cost;
						$stockcardcontent->issued_amount = $issued_amount;
						$balance_quantity = $lastrow->balance_quantity - Request::get('quantity');
						$balance_unit_cost = $lastrow->balance_unit_cost;
						$balance_amount = $lastrow->balance_amount - $issued_amount;
					}
				}

				$stockcardcontent->balance_quantity = $balance_quantity;
				$stockcardcontent->balance_unit_cost = $balance_unit_cost;
				$stockcardcontent->balance_amount = $balance_amount;
				$stockcardcontent->save();
			}

			return Response::json(['validation' => $validation]);
		}
	}

	public function viewstockcard($id)
	{
		$stockcard = stockcard::find($id);
		$items = stockcardcontent::where('stockcard_id', $id)->get();
		return view('msi.reports.view-stockcard', ['stockcard' => $stockcard, 'items' => $items	]);
	}

	public function viewstockstatus($x, $y)
	{
		$items = stockcard::whereHas('stockcardcontent', function($query) use ($x, $y){
			$query->whereMonth('created_at', $x)->whereYear('created_at', Carbon::now()->year-$y+1);
		})->with(['stockcardcontent' => function($query) use ($x, $y){
			$query->whereMonth('created_at', $x)->whereYear('created_at', Carbon::now()->year-$y+1);
		}])->orderBy('article')->get();
		return view('msi.reports.view-stockstatus', ['items' => $items, 'x' => $x, 'y' => $y]);
	}

	public function viewinventorymonthly($x, $y)
	{
		$type = 'monthly';
		$items = stockcard::whereHas('stockcardcontent', function($query) use ($x, $y){
			$query->whereMonth('created_at', $x)->whereYear('created_at', Carbon::now()->year-$y+1);
		})->with(['stockcardcontent' => function($query) use ($x, $y){
			$query->whereMonth('created_at', $x)->whereYear('created_at', Carbon::now()->year-$y+1);
		}])->with('bincard.bincardcontent')->orderBy('article')->get();
		return view('msi.reports.view-inventory', ['items' => $items, 'type' => $type, 'x' => $x, 'y' => $y]);
	}

	public function viewinventoryquarterly($x, $y)
	{
		$type = 'quarterly';
		$i = $n = 1;
		while($x >= 2 && $i < $x)
		{
			$n += 3;
			$i++;
		}
		$items = stockcard::whereHas('stockcardcontent', function($query) use ($n, $y){
			$query->whereMonth('created_at', '>=', $n)->whereMonth('created_at', '<=', $n+2)->whereYear('created_at', Carbon::now()->year-$y+1);
		})->with(['stockcardcontent' => function($query) use ($n, $y){
			$query->whereMonth('created_at', '>=', $n)->whereMonth('created_at', '<=', $n+2)->whereYear('created_at', Carbon::now()->year-$y+1);
		}])->with('bincard.bincardcontent')->orderBy('article')->get();
		$x = $n+2;
		return view('msi.reports.view-inventory', ['items' => $items, 'type' => $type, 'x' => $x, 'y' => $y]);
	}

	public function viewinventorysemiannually($x, $y)
	{
		$type = 'semiannually';
		$i = $n = 1;
		while($x >= 2 && $i < $x)
		{
			$n += 6;
			$i++;
		}
		$items = stockcard::whereHas('stockcardcontent', function($query) use ($n, $y){
			$query->whereMonth('created_at', '>=', $n)->whereMonth('created_at', '<=', $n+5)->whereYear('created_at', Carbon::now()->year-$y+1);
		})->with(['stockcardcontent' => function($query) use ($n, $y){
			$query->whereMonth('created_at', '>=', $n)->whereMonth('created_at', '<=', $n+5)->whereYear('created_at', Carbon::now()->year-$y+1);
		}])->with('bincard.bincardcontent')->orderBy('article')->get();
		$x = $n+5;
		return view('msi.reports.view-inventory', ['items' => $items, 'type' => $type, 'x' => $x, 'y' => $y]);
	}

	public function viewinventoryannually($y)
	{
		$type = 'annually';
		$items = stockcard::whereHas('stockcardcontent', function($query) use ($y){
			$query->whereMonth('created_at', '>=', 1)->whereMonth('created_at', '<=', 12)->whereYear('created_at', Carbon::now()->year-$y+1);
		})->with(['stockcardcontent' => function($query) use ($y){
			$query->whereMonth('created_at', '>=', 1)->whereMonth('created_at', '<=', 12)->whereYear('created_at', Carbon::now()->year-$y+1);
		}])->with('bincard.bincardcontent')->orderBy('article')->get();
		($y==1)?$x=Carbon::now()->month:$x='12';
		return view('msi.reports.view-inventory', ['items' => $items, 'type' => $type, 'x' => $x, 'y' => $y]);
	}
}

