<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|company
|worker
|admin
*/
Route::get("/truncate",function()
{
    \DB::table("users")->truncate();
    return Redirect::to("auth/login");
    //return view("emails.welcome");
        //$subscriber = new App\Handlers\Events\CompanyRegisteredHandler();
        //$event = ["name" => "subscribed"];
        //$event = Event::fire($subscriber->onCompanyRegistration($event));
});

Route::get("/mail",function()
{
    Mail::send('emails.welcome', array('key' => 'value'), function($message)
    {
        $message->to('miroslav.trninic@gmail.com', 'John Smith')->subject('Welcome!');
    });
        
});

Route::get('/', 'HomeController@getIndex');

Route::get('/admin', 'AdminController@getIndex');

Route::get('/companies/{company}', 'CompaniesController@getIndex');
Route::get('/companies/{company}/calendar', 'CompaniesController@getCalendar');
Route::get('/companies/{company}/customers',["as" => "manage-customers", "uses" => 'CompaniesController@getCustomers']);
Route::get('/companies/{company}/customers/create', 'CompaniesController@getCreateCustomer');
Route::post('/companies/{company}/customers/create', 'CompaniesController@postCreateCustomer');
Route::get('/companies/{company}/customers/{customer}', 'CompaniesController@getShowCustomer');

Route::get('/companies/{company}/customers/{customer}/update',["as" => "get-update-customer", "uses" => 'CompaniesController@getUpdateCustomer']);
Route::post('/companies/{company}/customers/{customer}/update',["as" => "post-update-customer", "uses" => 'CompaniesController@postUpdateCustomer']);
Route::post('/companies/{company}/customers/{customer}/delete',["as" => "post-delete-customer", "uses" => 'CompaniesController@postDeleteCustomer']);


Route::get('/companies/{company}/workers',["as" => "manage-workers", "uses" => 'CompaniesController@getWorkers']);
Route::get('/companies/{company}/workers/{worker}/update',["as" => "get-update-worker", "uses" => 'CompaniesController@getUpdateWorker']);
Route::get('/workers/{name}', 'WorkersController@getShow');

Route::post('/post-email', 'Auth\PasswordController@postEmail');
Route::post('/password/reset', 'Auth\PasswordController@postReset');

Route::post('/calendars/store', 'CalendarController@store');
//Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


