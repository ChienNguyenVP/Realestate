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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('admin')->group(function () {
	Route::get('/',function(){
        		return view('admin.index');
    })->name('admin.home');

    Route::prefix('project')->group(function () {
		Route::get('/list','ProjectController@index');
		Route::get('/sold','ProjectController@sold');
		Route::get('/add','ProjectController@add');
		Route::post('/add','ProjectController@store');
		Route::get('/edit/{id}','ProjectController@edit');
		Route::post('/edit/{id}','ProjectController@store_edit')->name('store_edit');
		Route::get('/delete/{id}','ProjectController@delete');

	});
	 Route::prefix('news')->group(function () {
		Route::get('/list','NewsController@index');
		// Route::get('/sold','ProjectController@sold');
		// Route::get('/add','ProjectController@add');
		// Route::post('/add','ProjectController@store');
		// Route::get('/edit/{id}','ProjectController@edit');
		// Route::post('/edit/{id}','ProjectController@store_edit')->name('store_edit');
		// Route::get('/delete/{id}','ProjectController@delete');

	});
});
Route::get('','ProjectController@home');
Route::get('/duan/{slug}','ProjectController@project_detail');
Route::get('/duan','ProjectController@project_list');


