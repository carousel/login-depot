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

Route::get('/companies/{name}', 'CompaniesController@getShow');
Route::get('/companies/{name}/calendar', 'CompaniesController@getCalendar');

Route::get('/workers/{name}', 'WorkersController@getShow');

Route::post('/post-email', 'Auth\PasswordController@postEmail');
Route::post('/password/reset', 'Auth\PasswordController@postReset');

//Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
