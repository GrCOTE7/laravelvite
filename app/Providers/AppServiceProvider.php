<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind(
			'App\Repositories\PhotosRepositoryInterface',
			'App\Repositories\PhotosRepository'
		);
	}

	public function boot()
	{
		View::composer(['pages.film.index', 'pages.film.create'], function ($view) {
			$view->with('categories', Category::orderBy('name')->get());
		});
	}
}
