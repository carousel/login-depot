<?php

Route::get('/', 'HomeController@getIndex');

Route::get('/admin', 'AdminController@getIndex');

Route::get('/companies/{company}', 'CompaniesController@getIndex');
Route::get('/companies/profile/create', 'CompaniesController@getCreateProfile');
Route::post('/companies/profile/create', 'CompaniesController@postCreateProfile');
Route::get('/companies/{company}/calendar', 'CompaniesController@getCalendar');
Route::post('/companies/{company}/share-calendar', 'CompaniesController@shareCalendar');
Route::get('/companies/{company}/view-calendar', 'CompaniesController@viewCalendar');
Route::get('/companies/{company}/customers',["as" => "manage-customers", "uses" => 'CompaniesController@getCustomers']);
Route::get('/companies/{company}/customers/create', 'CompaniesController@getCreateCustomer');
Route::post('/companies/{company}/customers/create', 'CompaniesController@postCreateCustomer');
Route::get('/companies/{company}/customers/{customer}', 'CompaniesController@getShowCustomer');

Route::get('/companies/{company}/customers/{customer}/update',["as" => "get-update-customer", "uses" => 'CompaniesController@getUpdateCustomer']);
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
//Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


