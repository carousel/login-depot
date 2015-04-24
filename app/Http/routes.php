<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|company
|worker
|admin
*/

Route::get("/mail",function()
{
    Mail::send('emails.welcome', array('key' => 'value'), function($message)
    {
        $message->to('miroslav.trninic@gmail.com', 'John Smith')->subject('Welcome!');
    });
        
});

Route::get('/companies', 'Auth\AuthController@getLogin');
Route::get('/companies/{id}', 'CompaniesController@getShow');
Route::get('/admin', 'AdminController@getIndex');
Route::get('/workers', 'WorkersController@getIndex');

//Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
