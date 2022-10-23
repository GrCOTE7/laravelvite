<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
	return view('pages.welcome');
})->name('welcome');

Route::get('article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+')->name('article');

Route::get('facture/{n}', function ($n) {
	return view('pages.facture')->withNumero($n);
})->where('n', '[0-9]+')->name('facture');

Route::get('t', [TestController::class, 'index'])->name('test');

Route::get('users', [UsersController::class, 'create'])->name('users');
Route::post('users', [UsersController::class, 'store'])->name('users');

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

Route::get('email', [EmailController::class, 'index']);
