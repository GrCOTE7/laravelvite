<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

use Illuminate\Support\Facades\Route;

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

// Route::get('t', 'testController@index');

Route::get('/', function () {
	return view('welcome');
})->name('welcome');;

Route::get('article/{n}', function ($n) {
	return view('article')->with('numero', $n);
})->where('n', '[0-9]+')->name('article');

Route::get('facture/{n}', function ($n) {
	return view('facture')->withNumero($n);
})->where('n', '[0-9]+')->name('facture');

Route::get('t', function () {
	return view('test');
})->name('test');

// Route::get('arr', function () {
// 	return ['un', 'deux', 'trois'];
// });

// Route::get('{n?}', function (int $n = 1): string {
// 	return 'Je suis la page ' . $n . ' !';
// })->where('n', '[1-3]');
