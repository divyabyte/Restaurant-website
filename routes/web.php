<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//users 

Route::get('/res-law', 'Users\UserDashboardController@res1');
Route::get('/user-profile-edit', 'Users\UserDashboardController@profileEdit');
Route::put('/user-profile-update/{id}', 'Users\UserDashboardController@profileUpdate');
Route::get('/res-lpu', 'Users\UserDashboardController@res');
Route::get('/user-profile', 'Users\UserDashboardController@profile');
Route::get('/res-view/{id}', 'Users\UserDashboardController@resView');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin
Route::group(['middleware' => ['auth','admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });


    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
    
    Route::get('/restaurant', 'Admin\DashboardController@restaurant');
    Route::delete('/res-delete/{id}','Admin\DashboardController@resdelete');
    Route::get('/res-edit/{id}', 'Admin\DashboardController@resedit');
    Route::put('/res-update/{id}', 'Admin\DashboardController@resupdate');
    Route::get('/res-add', 'Admin\DashboardController@resadd');
    Route::post('/res-new-add', 'Admin\DashboardController@resnewadd');

    Route::get('/menu', 'Admin\DashboardController@menu');
    Route::delete('/menu-delete/{id}','Admin\DashboardController@menudelete');
    Route::get('/menu-edit/{id}', 'Admin\DashboardController@menuedit');
    Route::put('/menu-update/{id}', 'Admin\DashboardController@menuupdate');
    Route::get('/menu-add', 'Admin\DashboardController@menuadd');
    Route::put('/menu-new-add', 'Admin\DashboardController@menunewadd');

   
});

