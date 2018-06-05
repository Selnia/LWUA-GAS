<?php
Route::get('/', 'DashboardController@index');

Route::group(['prefix' => 'msi'], function () {
	Route::get('/bincard', 'MSIController@bincard');
	Route::post('/addbincard', 'MSIController@addbincard');
	Route::post('/addbincardcontent', 'MSIController@addbincardcontent');
	Route::get('/viewbincard/{id}', 'MSIController@viewbincard')->where('x', '[0-9]+');;
	Route::get('/stockcard', 'MSIController@stockcard');
	Route::post('/addstockcard', 'MSIController@addstockcard');
	Route::post('/addstockcardcontent', 'MSIController@addstockcardcontent');
	Route::get('/viewstockcard/{id}', 'MSIController@viewstockcard')->where('x', '[0-9]+');;
	Route::get('/viewstockstatus', 'MSIController@viewstockstatus');
	Route::group(['prefix' => 'viewinventory'], function () {
		Route::get('/monthly/{x}', 'MSIController@viewinventorymonthly')->where('x', '([1-9]|1[0-2])');
		Route::get('/quarterly/{x}', 'MSIController@viewinventoryquarterly')->where('x', '[1-4]');
		Route::get('/semiannually/{x}', 'MSIController@viewinventorysemiannually')->where('x', '[1-2]');
		Route::get('/annually/{x}', 'MSIController@viewinventoryannually')->where('x', '[1-2]');
	});

	Route::get('/purchase_requisition', 'MSIController@purchase_requisition');
	Route::post('/addpurchase_requisition', 'MSIController@addpurchase_requisition');
	Route::get('/viewpurchase_requisition/{id}', 'MSIController@viewpurchase_requisition');
	Route::post('/addpurchase_requisitioncontent', 'MSIController@addpurchase_requisitioncontent');

	Route::get('autocomplete-search',array('as'=>'autocomplete.search','uses'=>'MSIController@index'));

Route::get('autocomplete-ajax',array('as'=>'autocomplete.ajax','uses'=>'MSIController@ajaxData'));

});
