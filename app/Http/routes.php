<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|company
|worker
|admin
*/

Route::get("test",function()
{
        
});
Route::get('/company', 'CompanyController@getIndex');
Route::get('/admin', 'AdminController@getIndex');
Route::get('/worker', 'AdminController@getIndex');

//Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
