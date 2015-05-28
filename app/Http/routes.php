<?php

Route::get('/', 'HomeController@getIndex');

Route::get('/admin', 'AdminController@getIndex');

Route::get('/companies/{company_name}', 'CompaniesController@getIndex');
Route::get('/companies/profile/create', 'CompaniesController@getCreateProfile');
Route::post('/companies/profile/create', 'CompaniesController@postCreateProfile');
Route::get('/companies/{company}/calendar', 'CompaniesController@getCalendar');
Route::post('/companies/{company}/share-calendar', 'CompaniesController@shareCalendar');
Route::get('/companies/{company}/view-calendar', 'CompaniesController@viewCalendar');

Route::get('/companies/{company}/orders',["as" => "manage-customers", "uses" => 'OrdersController@getOrders']);
//Route::get('/companies/{company}/customers/create', 'CompaniesController@getCreateCustomer');
Route::post('/companies/{company}/customers/create', 'CompaniesController@postCreateCustomer');
Route::get('/companies/{company}/customers/{customer}', 'CompaniesController@getShowCustomer');

Route::get('/companies/{company}/quotes','QuotesController@getQuotes');
Route::get('/companies/{company}/quotes/create', 'QuotesController@getCreate');
Route::post('/companies/{company}/quotes/create', 'QuotesController@postCreate');
Route::get('/companies/{company}/quotes/{id}/edit', 'QuotesController@getEdit');
Route::post('/companies/{company}/quotes/uship', 'QuotesController@getUshipPrice');
//Route::get('/uship', 'QuotesController@getUshipPrice');

Route::get('/companies/{company}/order-form/{quote_id}', 'OrdersController@getOrderForm');




Route::get('/companies/{company}/customers/{customer}/update/{order}',["as" => "get-update-customer", "uses" => 'CompaniesController@getUpdateCustomer']);
Route::post('/companies/{company}/customers/{customer}/update',["as" => "post-update-customer", "uses" => 'CompaniesController@postUpdateCustomer']);
Route::post('/companies/{company}/customers/{customer}/delete',["as" => "post-delete-customer", "uses" => 'CompaniesController@postDeleteCustomer']);

Route::get('/companies/{company}/workers/create', 'CompaniesController@getCreateWorker');
Route::post('/companies/{company}/workers/create', 'CompaniesController@postCreateWorker');
Route::get('/companies/{company}/workers',["as" => "manage-workers", "uses" => 'CompaniesController@getWorkers']);
Route::get('/companies/{company}/workers/{worker}/update',["as" => "get-update-worker", "uses" => 'CompaniesController@getUpdateWorker']);
Route::post('/companies/{company}/workers/{worker}/update',["as" => "post-update-worker", "uses" => 'CompaniesController@postUpdateWorker']);
Route::post('/companies/{company}/workers/{worker}/delete',["as" => "post-delete-worker", "uses" => 'CompaniesController@postDeleteWorker']);

Route::get('/workers/{name}', 'WorkersController@getIndex');

Route::post('/post-email', 'Auth\PasswordController@postEmail');
Route::post('/password/reset', 'Auth\PasswordController@postReset');

Route::post('/calendar/share', function(){
    return \Input::all();
});



//TYPEAHEAD AJAX
//Route::get("vehicles","QuotesController@getVehicles");
//Route::get("pickup-city","QuotesController@pickupCity");



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

