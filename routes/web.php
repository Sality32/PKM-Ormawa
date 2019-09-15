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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/testing',function(){
	return view('testing');
});

Route::prefix('ormawa')->group(function(){
	Route::get('/home',function(){
		return view('home');
	});
	Route::get('/formPengajuanProker',function(){
		return view('formPengajuanProker');
	});
	Route::get('/formLPJ',function(){
		return view('formLPJ');
	});
	Route::get('/formPengurus',function(){
		return view('formPengurus');
	});
	Route::get('/listPengurus',function(){
		return view('listPengurus');
	})
});

Route::prefix('pd3')->group(function(){
	Route::get('/formRevisi',function(){
		return view('formRevisi');
	});
	Route::get('/listLPJ',function(){
		return view('listLPJ');
	});

});


Route::prefix('admin')->group(function(){
	
});