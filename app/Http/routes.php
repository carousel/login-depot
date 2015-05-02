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
Route::get('/companies/{company}/customers/create', 'CompaniesController@getCreate');
Route::post('/companies/{company}/customers/create', 'CompaniesController@postCreate');
Route::get('/companies/{company}/customers/{customer}', 'CompaniesController@getShow');

Route::post('/companies/{company}/customers/{customer}/update',["as" => "post-update", "uses" => 'CompaniesController@postUpdate']);
Route::post('/companies/{company}/customers/{customer}/delete',["as" => "post-delete", "uses" => 'CompaniesController@postDelete']);
Route::get('/companies/{company}/customers/{customer}/update',["as" => "get-update", "uses" => 'CompaniesController@getUpdate']);

Route::get('/workers/{name}', 'WorkersController@getShow');

Route::post('/post-email', 'Auth\PasswordController@postEmail');
Route::post('/password/reset', 'Auth\PasswordController@postReset');

//Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
