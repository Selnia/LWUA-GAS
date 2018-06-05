<?php
Route::get('/', 'DashboardController@index');

Route::group(['prefix' => 'msi'], function () { 
	Route::get('/bincard', 'MSIController@bincard');
	Route::post('/addbincard', 'MSIController@addbincard');
	Route::post('/addbincardcontent', 'MSIController@addbincardcontent');
	Route::get('/viewbincard/{id}', 'MSIController@viewbincard');
	Route::get('/stockcard', 'MSIController@stockcard');
	Route::post('/addstockcard', 'MSIController@addstockcard');
	Route::post('/addstockcardcontent', 'MSIController@addstockcardcontent');
	Route::get('/viewstockcard/{id}', 'MSIController@viewstockcard');
	Route::get('/viewstockstatus', 'MSIController@viewstockstatus');
	Route::get('/MRS', 'MSIController@MRS');
	Route::post('/addmrs', 'MSIController@addmrs');
	Route::post('/addmrscontent', 'MSIController@addmrscontent');
	Route::get('/viewmrs/{id}', 'MSIController@viewmrs');
	Route::get('/disbursementvoucher', 'MSIController@disbursementvoucher');
	Route::post('/adddisbursementvoucher', 'MSIController@adddisbursementvoucher');
	Route::get('/viewdisbursementvoucher/{id}', 'MSIController@viewdisbursementvoucher');
});
