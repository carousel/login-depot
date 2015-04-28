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
Route::get('/companies/{id}', 'CompaniesController@getShow');
//UI COMPONENTS
Route::get('/companies/{id}/calendar', 'CompaniesController@getCalendar');
Route::get('/admin', 'AdminController@getIndex');
Route::post('/post-email', 'Auth\PasswordController@postEmail');
Route::post('/password/reset', 'Auth\PasswordController@postReset');
//Route::get('/workers', 'WorkersController@getIndex');

//Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
