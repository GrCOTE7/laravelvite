<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
})->name('welcome');

Route::get('article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+')->name('article');

Route::get('facture/{n}', function ($n) {
	return view('facture')->withNumero($n);
})->where('n', '[0-9]+')->name('facture');

Route::get('t', [TestController::class, 'index'])->name('test');

// Route::get('t', 'testController@index');

// Route::get('arr', function () {
// 	return ['un', 'deux', 'trois'];
// });

// Route::get('{n?}', function (int $n = 1): string {
// 	return 'Je suis la page ' . $n . ' !';
// })->where('n', '[1-3]');
