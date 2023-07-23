<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('pages.welcome');
})
	->name('welcome');

Route::get('product/{n}', [ProductController::class, 'show'])
	->where('n', '[0-9]{1,2}+')
	->name('product');

Route::get('bill/{n}', function ($n) {
	return view('pages.bill')
		->with('number', $n);
})
	->where('n', '[0-9]')
	->name('facture');
// ->middleware('auth');

Route::get('/req', function (Request $request) {
	return [
		'data'  => $request->input('naAme', 'Lio'),
		'data2' => $request->all(),
		'var'   => 'MaVar',
	];
});

Route::get('t', [TestController::class, 'index'])
	->name('test');

Route::get('account', function () {
	// Réservé aux utilisateurs authentifiés
})->middleware('auth');

// Route::resource('users', UsersController::class);

Route::get('contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

// https://mailtrap.io o r http://localhost:8025 (MailHog)
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
Route::controller(FilmController::class)
	->group(function () {
		Route::delete('film/force/{id}', 'forceDestroy')
			->name('film.force.destroy');
		Route::put('film/restore/{id}', 'restore')
			->name('film.restore');
		Route::get('actor/{slug}/films', 'index')
			->name('film.actor');
		Route::get('category/{slug}/films', 'index')
			->name('film.category');
	});
