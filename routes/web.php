<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('pages.welcome');
})->name('welcome');

Route::get('article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+')->name('article');

Route::get('facture/{n}', function ($n) {
	return view('pages.facture')->with('numero', $n);
})->where('n', '[0-9]+')->name('facture');

Route::get('t', [TestController::class, 'index'])->name('test');

Route::get('users', [UsersController::class, 'create'])->name('users.create');
Route::post('users', [UsersController::class, 'store'])->name('users.store');

Route::get('contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

// https://mailtrap.io
Route::get('/test-contact', function () {
	return new App\Mail\Contact([
		'nom'     => 'Durand',
		'email'   => 'durand@chezlui.com',
		'message' => 'Je voulais vous dire que votre site est magnifique !',
	]);
});

Route::get('photo', [PhotoController::class, 'create']);
Route::post('photo', [PhotoController::class, 'store']);

Route::resource('film', FilmController::class);
Route::controller(FilmController::class)->group(function () {
	Route::delete('film/force/{id}', 'forceDestroy')->name('film.force.destroy');
	Route::put('film/restore/{id}', 'restore')->name('film.restore');
	Route::get('actor/{slug}/films', 'index')->name('film.actor');
	Route::get('category/{slug}/films', 'index')->name('film.category');
});
