<?php

/*
|--------------------------------------------------------------------------
| Resource map
|--------------------------------------------------------------------------
|
| logindepot.com → top level domain
| companies 
| customers
| quotes 
| workers
| orders
|
*/


Route::get('/', 'HomeController@getIndex');
Route::get('/admin', 'AdminController@getIndex');

//COMPANY
Route::get('/companies/{company_name}', 'CompaniesController@getIndex');
Route::get('/companies/profile/create', 'CompaniesController@getCreateProfile');
Route::post('/companies/profile/create', 'CompaniesController@postCreateProfile');

//calendar
Route::get('/companies/{company}/calendar', 'CompaniesController@getCalendar');
Route::post('/companies/{company}/share-calendar', 'CompaniesController@shareCalendar');

//company customers
Route::post('/companies/{company}/customers/create', 'CompaniesController@postCreateCustomer');
Route::get('/companies/{company}/customers/{customer}', 'CompaniesController@getShowCustomer');
Route::get('/companies/{company}/customers/{customer}/update/{order}',["as" => "get-update-customer", "uses" => 'CompaniesController@getUpdateCustomer']);
Route::post('/companies/{company}/customers/{customer}/update',["as" => "post-update-customer", "uses" => 'CompaniesController@postUpdateCustomer']);
Route::post('/companies/{company}/customers/{customer}/delete',["as" => "post-delete-customer", "uses" => 'CompaniesController@postDeleteCustomer']);

//quotes
Route::get('/companies/{company}/quotes','QuotesController@getQuotes');
Route::get('/companies/{company}/quotes/create', 'QuotesController@getCreate');
Route::post('/companies/{company}/quotes/create', 'QuotesController@postCreate');
Route::get('/companies/{company}/quotes/{id}/edit', 'QuotesController@getEdit');
Route::post('/companies/{company}/quotes/uship', 'QuotesController@getUshipPrice');

//AJAX 
Route::get('/companies/{company}/quotes/vehicle-make', 'QuotesController@getVehicleMake');
Route::get('/companies/{company}/quotes/vehicle-name', 'QuotesController@getVehicleName');
Route::get('/companies/{company}/quotes/prefetch-zipcode', 'QuotesController@prefetchZipcode');
Route::post('/companies/{company}/quotes/prefetch-state', 'QuotesController@prefetchState');

//LINK FROM EMAIL
Route::get('/companies/{company}/order-form/{quote_id}', 'OrdersController@getOrderForm');
//PLACE ORDER
Route::post('/companies/{company}/order-form/{quote_id}', 'OrdersController@postOrder');

//company workers
Route::get('/companies/{company}/workers/create', 'CompaniesController@getCreateWorker');
Route::post('/companies/{company}/workers/create', 'CompaniesController@postCreateWorker');
Route::get('/companies/{company}/workers',["as" => "manage-workers", "uses" => 'CompaniesController@getWorkers']);
Route::get('/companies/{company}/workers/{worker}/update',["as" => "get-update-worker", "uses" => 'CompaniesController@getUpdateWorker']);
Route::post('/companies/{company}/workers/{worker}/update',["as" => "post-update-worker", "uses" => 'CompaniesController@postUpdateWorker']);
Route::post('/companies/{company}/workers/{worker}/delete',["as" => "post-delete-worker", "uses" => 'CompaniesController@postDeleteWorker']);
Route::get('/workers/{name}', 'WorkersController@getIndex');

//PASSWORD RESET
Route::post('/post-email', 'Auth\PasswordController@postEmail');
Route::post('/password/reset', 'Auth\PasswordController@postReset');

//AUTHENTICATION
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

