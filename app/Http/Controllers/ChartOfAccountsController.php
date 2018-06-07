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
	    	$items = chartofaccount::where('account_group', Request::get('select1'))->distinct()->select('major_account_group')->orderBy('major_account_group')->get();

	    	return Response::json(['items' => $items]);
    	}
    }

    public function select2()
    {
    	if(Request::ajax())
        {
            $items = chartofaccount::where('account_group', Request::get('select1'))->where('major_account_group', Request::get('select2'))->distinct()->select('sub_major_account_group')->orderBy('sub_major_account_group')->get();

            return Response::json(['items' => $items]);
        }
    }

    public function select3()
    {
    	if(Request::ajax())
        {
            $items = chartofaccount::where('account_group', Request::get('select1'))->where('major_account_group', Request::get('select2'))->where('sub_major_account_group', Request::get('select3'))->distinct()->select('gl_account')->orderBy('gl_account')->get();

            return Response::json(['items' => $items]);
        }
    }

    public function select4()
    {
    	if(Request::ajax())
        {
            $items = chartofaccount::where('account_group', Request::get('select1'))->where('major_account_group', Request::get('select2'))->where('sub_major_account_group', Request::get('select3'))->where('gl_account', Request::get('select4'))->distinct()->select('gl_contra_account')->orderBy('gl_contra_account')->get();

            return Response::json(['items' => $items]);
        }
    }

    public function select5()
    {
    	if(Request::ajax())
        {
            $items = chartofaccount::where('account_group', Request::get('select1'))->where('major_account_group', Request::get('select2'))->where('sub_major_account_group', Request::get('select3'))->where('gl_account', Request::get('select4'))->where('gl_contra_account', Request::get('select5'))->distinct()->select('subsidiary_ledger_account')->orderBy('subsidiary_ledger_account')->get();

            return Response::json(['items' => $items]);
        }
    }

    public function select6()
    {
    	if(Request::ajax())
        {
            $items = chartofaccount::where('account_group', Request::get('select1'))->where('major_account_group', Request::get('select2'))->where('sub_major_account_group', Request::get('select3'))->where('gl_account', Request::get('select4'))->where('gl_contra_account', Request::get('select5'))->where('subsidiary_ledger_account', Request::get('select6'))->distinct()->select('account_name')->orderBy('account_name')->get();

            return Response::json(['items' => $items]);
        }
    }
}
