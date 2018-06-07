<?php

namespace App\Http\Controllers;

use Request;
use Response;
use Carbon\Carbon;
use App\bincard;
use App\bincardcontent;
use App\stockcard;
use App\stockcardcontent;
use App\purchase_requisition;
use App\purchase_requisitioncontent;
use App\material;
use App\mrscontent;
use App\disbursement_voucher;

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

	public function viewstockstatus()
	{
		$items = stockcard::with('stockcardcontent')->orderBy('article')->get();
		return view('msi.reports.view-stockstatus', compact('items'));
	}

	public function viewinventorymonthly($x)
	{
		$type = 'monthly';
		$items = stockcard::whereHas('stockcardcontent', function($query) use ($x){
			$query->whereMonth('created_at', $x)->whereYear('created_at', Carbon::now()->year);
		})->get();
		return view('msi.reports.view-inventory', ['items' => $items, 'type' => $type, 'x' => $x]);
	}

	public function viewinventoryquarterly($x)
	{
		$type = 'quarterly';
		$i = $n = 1;
		while($x >= 2 && $i < $x)
		{
			$n += 3;
			$i++;
		}
		$items = stockcard::whereHas('stockcardcontent', function($query) use ($n){
			$query->whereMonth('created_at', '>=', $n)->whereMonth('created_at', '<=', $n+2)->whereYear('created_at', Carbon::now()->year);
		})->get();
		$x = $n+2;
		return view('msi.reports.view-inventory', ['items' => $items, 'type' => $type, 'x' => $x]);
	}

	public function viewinventorysemiannually($x)
	{
		$type = 'semiannually';
		$i = $n = 1;
		while($x >= 2 && $i < $x)
		{
			$n += 6;
			$i++;
		}
		$items = stockcard::whereHas('stockcardcontent', function($query) use ($n){
			$query->whereMonth('created_at', '>=', $n)->whereMonth('created_at', '<=', $n+5)->whereYear('created_at', Carbon::now()->year);
		})->get();
		$x = $n+5;
		return view('msi.reports.view-inventory', ['items' => $items, 'type' => $type, 'x' => $x]);
	}

	public function viewinventoryannually($x)
	{
		$type = 'annually';
		$items = stockcard::whereMonth('created_at', '>=', 1)->whereMonth('created_at', '<=', 12)->get();
		return view('msi.reports.view-inventory', ['type' => $type]);
	}

	public function purchase_requisition()
	{
		$items = purchase_requisition::all();
		return view('msi.purchase_requisition', compact('items'));
	}

	public function addpurchase_requisition()
	{

		if(Request::ajax())
		{
			$pr = new purchase_requisition;

			$pr->pr_no = Request::get('pr_number');
			$pr->to = Request::get('to');
			$pr->charge_to = Request::get('charge_to');
			$pr->options = Request::get('options');
			$pr->needs_item = Request::get('needs_item');
			$pr->needs_budget = Request::get('needs_budget');
			$pr->justification = Request::get('justification');
			$pr->end_user = Request::get('end_user');
			$pr->job_work_order_no = Request::get('order_no');
			$pr->to_be_carried = Request::get('to_be_carried');
			$pr->on_case_to = Request::get('on_case_to');
			$pr->requisitioned_name = Request::get('requisitioned_name');
			$pr->requisitioned_position = Request::get('requisitioned_position');
			$pr->supervisor = Request::get('supervisor');
			$pr->finance = Request::get('finance');
			$pr->general_manager = Request::get('approved_general_manager');
			$pr->control_no = Request::get('control_no');
			$pr->budget_quarter = Request::get('budget_quarter');
			$pr->budget_year = Request::get('budget_year');
			$pr->amount_quarter = Request::get('amount_quarter');
			$pr->amount_year = Request::get('amount_year');
			$pr->btd_quarter = Request::get('btd_quarter');
			$pr->btd_year = Request::get('btd_year');
			$pr->amntreq_quarter = Request::get('amntreq_quarter');
			$pr->amntreq_year = Request::get('amntreq_year');
			$pr->balreq_quarter = Request::get('balreq_quarter');
			$pr->balreq_year = Request::get('balreq_year');
			$pr->save();

			return Response::json(['purchase_requisition' => $pr]);
		}
	}

	public function viewpurchase_requisition($id)
	{
		$purchase_req = purchase_requisition::find($id);
		$items = purchase_requisitioncontent::where('pr_id',  $id)->get();
		$total = purchase_requisitioncontent::where('pr_id', $id)->sum('estimated_cost');

		$stock_number = purchase_requisitioncontent::with('stockcard')->get();
		//dd($stock_number->stockcard->stock_number);
		return view('msi.reports.view-purchase-requisition', ['purchase_req' => $purchase_req, 'items' => $items, 'total' => $total, 'stock_number' => $stock_number]);
	}

	public function addpurchase_requisitioncontent()
	{
			
		if (Request::ajax())
		{
			$pr_content = new purchase_requisitioncontent;

			$pr_content->pr_id = Request::get('pr_id');
			$pr_content->item_no = Request::get('pr_id');
			$pr_content->stock_number = Request::get('stock_number');
			$pr_content->available_stock = Request::get('available_stock');
			$pr_content->reorder_point = Request::get('reorder_point');
			$pr_content->reorder_quantity = Request::get('reorder_quantity');
			$pr_content->particulars = Request::get('particulars');
			$pr_content->quantity = Request::get('quantity');
			$pr_content->unit_cost = Request::get('unit_cost');
			$pr_content->estimated_cost = Request::get('quantity') * Request::get('unit_cost');
			$pr_content->a_item_no = Request::get('a_item_no');
			$pr_content->a_quantity = Request::get('a_quantity');
			$pr_content->a_classification = Request::get('b_classification');
			$pr_content->b_item_no = Request::get('a_item_no');
			$pr_content->b_quantity = Request::get('b_quantity');
			$pr_content->b_classification = Request::get('b_classification');
			$pr_content->save();
		}
	}

	public function MRS()
	{
		$materials = material::all();
		return view('msi.mrs', compact('materials'));
	}
	public function viewmrs($id)
	{
		$mrs = material::find($id);
		$views = mrscontent::where('mrs_id', $id)->get();
		$total = mrscontent::where('mrs_id', $id)->sum('amount');
		return view('msi.reports.view-mrs', ['mrs' => $mrs, 'views' => $views, 'total' => $total	]);
	}

	public function addmrs()
	{
		if(Request::ajax())
		{
			$mrs = new material;
			$mrs->supplier = Request::get('supplier');
			$mrs->address = Request::get('address');
			$mrs->invoice_number = Request::get('invoice_number');
			$mrs->invoice_date = Request::get('invoice_date');
			$mrs->delivery_reciept_number = Request::get('delivery_reciept_number');
			$mrs->delivery_reciept_date = Request::get('delivery_reciept_date');
			$mrs->po_number = Request::get('po_number');
			$mrs->po_date = Request::get('po_date');
			$mrs->storekeeper = Request::get('storekeeper');
			$mrs->plant_maint_officer = Request::get('plant_maint_officer');
			$mrs->supplier_representative = Request::get('supplier_representative');
			$mrs->reason = Request::get('reason');
			$mrs->number = Request::get('number');
			$mrs->save(); 

			return Response::json(['mrs' => $mrs]);
		}
	}

	public function addmrscontent()
	{
		if(Request::ajax())
		{
			$mrsc = new mrscontent;
			$mrsc->mrs_id = Request::get('mrs_id');
			$mrsc->description = Request::get('description');
			$mrsc->quantity = Request::get('quantity');
			$mrsc->unit = Request::get('unit');
			$mrsc->unit_price = Request::get('unit_price');
			$mrsc->amount = Request::get('quantity') * Request::get('unit_price');
			$mrsc->save();
		}
	}

	public function disbursementvoucher()
	{
		$dvs = disbursement_voucher::all();
		return view('msi.dv', compact('dvs'));
	} 

	public function adddisbursementvoucher()
	{
		if(Request::ajax())
		{
			$dv = new disbursement_voucher;
			$dv->mode_of_payment = Request::get('mode_of_payment');
			$dv->number = Request::get('number');
			$dv->dv_date = Request::get('dv_date');
			$dv->payee_office = Request::get('payee_office');
			$dv->tin_employee_number = Request::get('tin_employee_number');
			$dv->os_bus_number = Request::get('os_bus_number');
			$dv->os_bus_date = Request::get('os_bus_date');
			$dv->address = Request::get('address');
			$dv->title = Request::get('title');
			$dv->explanation = Request::get('explanation');
			$dv->amount = Request::get('amount');
			$dv->cash_available = Request::get('cash_available');
			$dv->printed_name_one = Request::get('printed_name_one');
			$dv->printed_name_two = Request::get('printed_name_two');
			$dv->printed_name_three = Request::get('printed_name_three');
			$dv->position_one = Request::get('position_one');
			$dv->position_two = Request::get('position_two');
			$dv->position_three = Request::get('position_three');
			$dv->certified_date_one = Request::get('certified_date_one');
			$dv->certified_date_two = Request::get('certified_date_two');
			$dv->certified_date_three = Request::get('certified_date_three');
			$dv->save();

			return Response::json(['dv' => $dv]);
		}
	}

	public function viewdisbursementvoucher($id)
	{
		$dvs = disbursement_voucher::find($id);
		return view('msi.reports.view-dv', compact('dvs'));
	}
}

