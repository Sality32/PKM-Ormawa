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
	Route::get('/listProposal','ProposalController@index');
	Route::post('/storeProposal','ProposalController@store');
	Route::get('/listPengajuan','ormawaController@index');
	Route::get('/formPerbaikan/{id_proposal}','ProposalController@revisi');
	Route::post('/formPerbaikanAction','ProposalController@revisiAction');
	Route::get('/detailPenolakan/{id_proposal}','ProposalController@detailPenolakan');
});

Route::prefix('bem')->group(function(){
	Route::get('/listPengajuan','bem@index');
	Route::get('/revisiBem/{id_proposal}','bem@revisi');
	Route::post('/revisiBemAction','bem@revisiAction');
	Route::get('/updateStatus/{id_proposal}/{status}','bem@updateStatus');
	Route::get('/listKegiatan','bem@indexDiterima');
});



Route::prefix('manajemen')->group(function(){
	Route::get('/formRevisi',function(){
		return view('manajemen/formRevisiPengajuan');
	});
	Route::get('/listLPJ',function(){
		return view('manajemen/listLPJ');
	});
	Route::get('/listPengajuan','Manajemen@index');
	Route::get('/revisiManajemen/{id_proposal}','Manajemen@revisi');
	Route::post('/revisiManajemenAction','Manajemen@revisiAction');
	Route::get('/updateStatus/{id_proposal}/{status}','Manajemen@updateStatus');
	Route::get('/tolakProposal/{id_proposal}','Manajemen@tolak');
	Route::post('/tolakProposalAction','Manajemen@tolakAction');

});


Route::prefix('admin')->group(function(){

});