<?php

namespace App\Http\Controllers;

use Request;
use Response;
use App\chartofaccount;

class ChartOfAccountsController extends Controller
{
    public function select1()
    {
    	if(Request::ajax())
    	{
	    	$items = chartofaccount::where('account_group', Request::get('value'))->distinct()->select('major_account_group')->orderBy('major_account_group')->get();

	    	return Response::json(['items' => $items]);
    	}
    }

    public function select2()
    {
    	
    }

    public function select3()
    {
    	
    }

    public function select4()
    {
    	
    }

    public function select5()
    {
    	
    }

    public function select6()
    {
    	
    }
}
