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

Route::get('/404',function(){
	return view('404');
});

Route::prefix('ormawa')->group(function(){
	Route::get('/home',function(){
		return view('home');
	});
	Route::get('/formPengajuanProker',function(){
		return view('ormawa/formPengajuanProker');
	});
	Route::get('/formLPJ',function(){
		return view('ormawa/formLPJ');
	});
	Route::get('/formPengurus',function(){
		return view('ormawa/formEditPengurus');
	});
	Route::get('/listPengurus',function(){
		return view('ormawa/listPengurus');
	});
});

Route::prefix('manajemen')->group(function(){
	Route::get('/formRevisi',function(){
		return view('manajemen/formRevisiPengajuan');
	});
	Route::get('/listLPJ',function(){
		return view('manajemen/listLPJ');
	});

});


Route::prefix('admin')->group(function(){

});