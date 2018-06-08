<?php
use App\chartofaccount;

Route::get('/', 'DashboardController@index');
Route::get('/chartofaccounts', function() {
	$items = chartofaccount::distinct();
	return view('chartofaccounts', compact('items'));
});

Route::group(['prefix' => 'chartofaccounts'], function () {
	Route::post('/select1', 'ChartOfAccountsController@select1');
	Route::post('/select2', 'ChartOfAccountsController@select2');
	Route::post('/select3', 'ChartOfAccountsController@select3');
	Route::post('/select4', 'ChartOfAccountsController@select4');
	Route::post('/select5', 'ChartOfAccountsController@select5');
	Route::post('/select6', 'ChartOfAccountsController@select6');
});

Route::group(['prefix' => 'msi'], function () { 
	Route::get('/bincard', 'MSIController@bincard');
	Route::post('/addbincard', 'MSIController@addbincard');
	Route::post('/addbincardcontent', 'MSIController@addbincardcontent');
	Route::get('/viewbincard/{id}', 'MSIController@viewbincard')->where('x', '[0-9]+');
	Route::get('/stockcard', 'MSIController@stockcard');
	Route::post('/addstockcard', 'MSIController@addstockcard');
	Route::post('/addstockcardcontent', 'MSIController@addstockcardcontent');
	Route::get('/viewstockcard/{id}', 'MSIController@viewstockcard')->where('x', '[0-9]+');
	Route::get('/viewstockstatus', 'MSIController@viewstockstatus');
	Route::group(['prefix' => 'viewinventory'], function () {
		Route::get('/monthly/{x}/{y}', 'MSIController@viewinventorymonthly')->where('x', '([1-9]|1[0-2])')->where('y', '[1-5]');
		Route::get('/quarterly/{x}/{y}', 'MSIController@viewinventoryquarterly')->where('x', '[1-4]')->where('y', '[1-5]');
		Route::get('/semiannually/{x}/{y}', 'MSIController@viewinventorysemiannually')->where('x', '[1-2]')->where('y', '[1-5]');
		Route::get('/annually/{y}', 'MSIController@viewinventoryannually')->where('y', '[1-5]');
	});
	Route::get('/purchase_requisition', 'MSIController@purchase_requisition');
	Route::post('/addpurchase_requisition', 'MSIController@addpurchase_requisition');
	Route::get('/viewpurchase_requisition/{id}', 'MSIController@viewpurchase_requisition');
	Route::post('/addpurchase_requisitioncontent', 'MSIController@addpurchase_requisitioncontent');
	Route::get('/MRS', 'MSIController@MRS');
	Route::post('/addmrs', 'MSIController@addmrs');
	Route::post('/addmrscontent', 'MSIController@addmrscontent');
	Route::get('/viewmrs/{id}', 'MSIController@viewmrs');
	Route::get('/disbursementvoucher', 'MSIController@disbursementvoucher');
	Route::post('/adddisbursementvoucher', 'MSIController@adddisbursementvoucher');
	Route::get('/viewdisbursementvoucher/{id}', 'MSIController@viewdisbursementvoucher');
});
